<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function getDineroTotal() {
        $compras = Buy::with('products')->get();
        $total = 0;
        foreach ($compras as $compra) {
            foreach ($compra->products as $product) {
                $total += $product->precio;
            }
        }

        return $total;
    }

    public static function getCantCompras() {
        $compras = Buy::count();
        return $compras;
    }

    public static function getCantUsuarios() {
        $usuarios = User::count();
        return $usuarios;
    }

    public static function getUltCompras() {
        $compras = Buy::with(['products', 'user'])->orderBy('created_at', 'desc')->limit(3)->get();
        return $compras;
    }

    public static function getMesConMasFacutracion() {
        $comprasEnero = Buy::with('products')->whereMonth('created_at', '1')->get();
        $comprasFebrero = Buy::with('products')->whereMonth('created_at', '2')->get();
        $comprasMarzo = Buy::with('products')->whereMonth('created_at', '3')->get();
        $comprasAbril = Buy::with('products')->whereMonth('created_at', '4')->get();
        $comprasMayo = Buy::with('products')->whereMonth('created_at', '5')->get();
        $comprasJunio = Buy::with('products')->whereMonth('created_at', '6')->get();
        $comprasJulio = Buy::with('products')->whereMonth('created_at', '7')->get();
        $comprasAgosto = Buy::with('products')->whereMonth('created_at', '8')->get();
        $comprasSeptiembre = Buy::with('products')->whereMonth('created_at', '9')->get();
        $comprasOctubre = Buy::with('products')->whereMonth('created_at', '10')->get();
        $comprasNoviembre = Buy::with('products')->whereMonth('created_at', '11')->get();
        $comprasDiciembre = Buy::with('products')->whereMonth('created_at', '12')->get();

        $totalesPorMes = [];
        
        $totalesPorMes = self::recorrerMes($comprasEnero, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasFebrero, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasMarzo, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasAbril, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasMayo, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasJunio, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasJulio, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasAgosto, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasSeptiembre, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasOctubre, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasNoviembre, $totalesPorMes);
        $totalesPorMes = self::recorrerMes($comprasDiciembre, $totalesPorMes);

        arsort($totalesPorMes);
        $mesConMasFacturacion = array_key_first($totalesPorMes);
        $monto = $totalesPorMes[$mesConMasFacturacion];
        
        return [$mesConMasFacturacion, $monto];
    }

    public static function recorrerMes($comprasMes, $totalesPorMes) {
        foreach ($comprasMes as $compra) {
            if(!isset($totalesPorMes[$compra->created_at->month])) {
                $totalesPorMes[$compra->created_at->month] = 0;
            }
            foreach ($compra->products as $product) {
                $totalesPorMes[$compra->created_at->month] += $product->precio;
            }
        }
        return $totalesPorMes;
    } 
}
