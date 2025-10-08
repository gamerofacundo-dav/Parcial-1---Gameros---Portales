<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
                [
                    'titulo' => 'Una historia llena de emociones',
                    'descripcion' => 'Una historia emocionante, que recorre todo lo que un jugador quisiera explorar',
                    'contenido' => '<div>
                                        <section>
                                            <h2>Introducción a la historia</h2>
                                            <p>En Baldur’s Gate 3, la narrativa empieza con el secuestro por los Mind Flayers y la infección por el parásito. Este evento impulsa toda la aventura y motiva las decisiones del jugador. Desde el primer instante, el juego establece un tono oscuro y misterioso, donde la supervivencia depende tanto del ingenio como de la moral. A medida que avanzas, cada encuentro, elección y diálogo amplía las ramificaciones del conflicto, revelando secretos que conectan los destinos de múltiples personajes. El jugador no solo experimenta una historia épica, sino también una constante reflexión sobre el poder, la corrupción y la libertad.</p>
                                        </section>

                                        <section>
                                            <h2>Personajes principales y aliados</h2>
                                            <p>Cada compañero tiene su trasfondo y motivaciones únicas, desde Shadowheart hasta Lae’zel, ofreciendo distintas perspectivas sobre la historia y conflictos internos. A través de sus historias personales, el jugador puede explorar temas de redención, venganza, fe y autodescubrimiento. Estos personajes no solo sirven como aliados en combate, sino como espejos del propio protagonista, reflejando las decisiones que tomamos y cuestionando nuestros valores. Con diálogos profundamente escritos y un sistema de afinidad que cambia según tus actos, cada interacción puede fortalecer o destruir vínculos que afectan el desenlace final.</p>
                                        </section>

                                        <section>
                                            <h2>Primeros desafíos tácticos</h2>
                                            <img src="images/bg3-blog1-combate.jpg" alt="Primeros combates Baldur’s Gate 3">
                                            <p>El jugador debe adaptarse al sistema de combate por turnos desde el inicio, usando hechizos, objetos y el entorno para superar enemigos y acertijos. Las primeras batallas funcionan como lecciones prácticas que enseñan a planificar, observar y anticipar cada movimiento. Baldur’s Gate 3 recompensa la experimentación: una caja arrojada al enemigo, una trampa activada a tiempo o una pared de fuego pueden definir la diferencia entre la derrota y la victoria. La tensión de cada enfrentamiento se combina con la narrativa, logrando que cada combate sea parte esencial de la historia y no un simple obstáculo entre diálogos.</p>
                                        </section>
                                    </div>
                    ',
                    'autor' => 'Ricardo Flora',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'titulo' => 'Explorando Faerûn y sus secretos',
                    'descripcion' => 'Descubre los mapas, misiones y NPCs que hacen el mundo vivo.',
                    'contenido' => '<div>
                                        <section>
                                            <h2>Exploración de Faerûn</h2>
                                            <p>Los mapas de Baldur’s Gate 3 están llenos de secretos, desde cuevas ocultas hasta aldeas llenas de vida, invitando al jugador a explorar cada rincón del mundo. Las rutas alternativas y zonas opcionales recompensan la curiosidad con tesoros, diálogos inéditos y eventos únicos. Cada región tiene su propia atmósfera, fauna, y arquitectura, lo que refuerza la sensación de estar recorriendo un universo vivo. Además, la iluminación, el clima y los sonidos ambientales sumergen completamente al jugador, creando una experiencia de exploración donde cada paso tiene el potencial de cambiar el curso de la aventura.</p>
                                        </section>

                                        <section>
                                            <h2>Misiones secundarias interesantes</h2>
                                            <p>Además de la historia principal, el juego ofrece misiones que profundizan en el lore de los Reinos Olvidados y permiten tomar decisiones que afectan el mundo. Algunas de estas misiones parecen simples al comienzo, pero terminan teniendo consecuencias inesperadas horas después. Muchas revelan historias trágicas o morales ambiguas que desafían al jugador a elegir entre lo correcto y lo conveniente. Baldur’s Gate 3 logra que cada misión secundaria tenga peso narrativo y jugable, invitando a descubrir no solo recompensas materiales, sino también verdades ocultas sobre los personajes y el propio universo del juego.</p>
                                        </section>

                                        <section>
                                            <h2>Interacción con NPCs</h2>
                                            <img src="images/bg3-blog2-npcs.jpg" alt="Interacción con NPCs Baldur’s Gate 3">
                                            <p>El diálogo es clave: las elecciones pueden mejorar o romper relaciones, desbloquear recompensas y alterar el desarrollo de la historia. Cada NPC tiene una personalidad definida, con gestos, reacciones y voces que reflejan sus emociones. Gracias a las tiradas de dados integradas en las conversaciones, el jugador siente que está participando en una verdadera partida de rol, donde cada frase puede abrir o cerrar caminos narrativos. Algunas interacciones pueden parecer triviales, pero esconden secretos, alianzas o futuros enemigos, recordándonos que en Faerûn, incluso una palabra puede cambiar un destino.</p>
                                        </section>
                                    </div>
                    ',
                    'autor' => 'Gustavo Dermaglós',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'titulo' => 'Dominando el combate táctico',
                    'descripcion' => 'Estrategias y uso del entorno para triunfar en los enfrentamientos.',
                    'contenido' => '<div>
                                        <section>
                                            <h2>Combate táctico por turnos</h2>
                                            <p>Los enfrentamientos requieren estrategia y creatividad. Cada hechizo, habilidad y movimiento puede cambiar el resultado del combate. La clave está en entender la sinergia entre los miembros del grupo y aprovechar sus fortalezas para adaptarse a cada situación. En Baldur’s Gate 3, la colocación en el terreno, el control del espacio y la anticipación de los turnos enemigos son tan importantes como el daño que infliges. Los jugadores más experimentados aprenden a combinar efectos, manipular estados alterados y convertir el campo de batalla en un tablero donde la inteligencia siempre supera la fuerza bruta.</p>
                                        </section>

                                        <section>
                                            <h2>Uso del entorno</h2>
                                            <p>El terreno es interactivo: se puede empujar enemigos, usar barriles explosivos o aprovechar obstáculos para obtener ventaja en combate. Esta mecánica fomenta la improvisación y premia la creatividad. Un simple charco de agua puede volverse letal con un hechizo eléctrico, mientras que una superficie aceitada puede transformarse en un incendio devastador. Cada entorno tiene su propio potencial táctico, y dominarlo implica observar, experimentar y actuar con astucia. Este nivel de interacción convierte cada encuentro en un rompecabezas estratégico lleno de posibilidades únicas.</p>
                                        </section>

                                        <section>
                                            <h2>Preparación y planificación</h2>
                                            <img src="images/bg3-blog3-combate.jpg" alt="Estrategia combate Baldur’s Gate 3">
                                            <p>El jugador debe planear ataques, coordinar habilidades del grupo y anticipar acciones enemigas, aumentando la profundidad estratégica. Preparar el terreno antes de un combate puede marcar la diferencia entre una victoria limpia y una derrota total. La gestión de recursos —como hechizos, pociones o puntos de acción— requiere pensar a largo plazo y adaptarse a lo inesperado. Baldur’s Gate 3 no perdona la improvisación descuidada: cada turno es una oportunidad para demostrar astucia, paciencia y conocimiento del sistema de combate más refinado de un RPG moderno.</p>
                                        </section>
                                    </div>
                    ',
                    'autor' => 'Facundo Pamcho',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'titulo' => 'Clases, elecciones y habilidades',
                    'descripcion' => 'Cómo las elecciones y la personalización afectan la historia y el combate.',
                    'contenido' => '<div>
                                        <section>
                                            <h2>Clases y personalización</h2>
                                            <p>Baldur’s Gate 3 permite elegir entre múltiples clases y razas, cada una con habilidades y ventajas únicas, afectando tanto combate como interacciones. Desde magos que manipulan la realidad hasta bárbaros que confían en su furia, el juego ofrece una amplia variedad de estilos de juego. Cada clase abre nuevas opciones de diálogo, caminos narrativos y estrategias de grupo, lo que convierte la personalización en una herramienta narrativa. La posibilidad de multiclasificar y adaptar tu personaje refuerza la sensación de libertad, permitiéndote crear un héroe o villano verdaderamente tuyo.</p>
                                        </section>

                                        <section>
                                            <h2>Elecciones morales</h2>
                                            <p>Las decisiones del jugador impactan la historia, desde salvar a un NPC hasta sacrificar un aliado, creando múltiples finales posibles. No existen respuestas correctas, solo consecuencias. Baldur’s Gate 3 juega con la moralidad del jugador, empujándolo constantemente a elegir entre lo justo y lo pragmático. Algunas decisiones pueden parecer pequeñas, pero resuenan más adelante de formas inesperadas. Esta red de causas y efectos otorga un peso emocional real a cada acción, haciendo que el jugador sienta la carga de sus elecciones en el mundo y en sí mismo.</p>
                                        </section>

                                        <section>
                                            <h2>Rol de los hechizos y habilidades</h2>
                                            <img src="images/bg3-blog4-magias.jpg" alt="Hechizos Baldur’s Gate 3">
                                            <p>Seleccionar las habilidades correctas para cada situación es crucial; algunos encuentros requieren ingenio y conocimiento de las reglas de D&D 5e. Cada hechizo tiene su momento perfecto: desde una simple ilusión que evita un enfrentamiento hasta una bola de fuego que cambia el curso del combate. Además, las habilidades fuera de combate también influyen en la historia, desbloqueando nuevos caminos, soluciones pacíficas o formas creativas de superar obstáculos. Baldur’s Gate 3 convierte cada punto de habilidad en una oportunidad para expresar tu estilo de juego y moldear el mundo a tu manera.</p>
                                        </section>
                                    </div>
                    ',
                    'autor' => 'Will Steve',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'titulo' => 'Los Mind Flayers y facciones en conflicto',
                    'descripcion' => 'Amenazas principales y la interacción con diferentes grupos del juego.',
                    'contenido' => '<div>
                                        <section>
                                            <h2>Historia de los Mind Flayers</h2>
                                            <p>El juego explora la amenaza de los Mind Flayers y su parásito, proporcionando un hilo narrativo que conecta cada aventura y conflicto del jugador. Estas criaturas psiónicas representan una de las fuerzas más inquietantes de los Reinos Olvidados, tanto por su poder como por su manipulación mental. A medida que la historia avanza, se revelan sus verdaderos objetivos y la magnitud de su influencia. El jugador, infectado y al borde de perder su humanidad, se enfrenta a una constante tensión entre aprovechar el poder del parásito o resistir su corrupción.</p>
                                        </section>

                                        <section>
                                            <h2>Relaciones entre facciones</h2>
                                            <p>Diferentes grupos en el juego tienen intereses contrapuestos. La forma en que interactúes con ellos influye en la historia y en tus recompensas. Algunas facciones buscan poder, otras redención, y otras simplemente sobrevivir. Formar alianzas puede traer ventajas, pero también enemigos peligrosos. Las tensiones entre los githyanki, los druidas, los goblins y los tieflings crean un ecosistema político donde cada acción del jugador repercute en todo Faerûn. Tomar partido no solo cambia los diálogos, sino que reconfigura el equilibrio del mundo mismo.</p>
                                        </section>

                                        <section>
                                            <h2>Explorando ruinas antiguas</h2>
                                            <img src="images/bg3-blog5-ruinas.jpg" alt="Ruinas en Baldur’s Gate 3">
                                            <p>Las ruinas esconden secretos y tesoros, y a menudo presentan desafíos que requieren resolución de acertijos y estrategia. Estas zonas ofrecen un vistazo a civilizaciones perdidas y a los orígenes de los Mind Flayers. Cada ruina está llena de trampas, enigmas y recompensas ocultas para quienes se atrevan a investigar. Explorar estos lugares no solo brinda equipamiento valioso, sino también fragmentos de historia que amplían el universo del juego, demostrando que Baldur’s Gate 3 es tanto una experiencia de combate como de descubrimiento arqueológico y narrativo.</p>
                                        </section>
                                    </div>
                    ',
                    'autor' => 'Karla Drack',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'titulo' => 'Impacto y futuro de Baldur’s Gate 3',
                    'descripcion' => 'Cómo el juego revitalizó los RPGs y qué esperar de expansiones futuras.',
                    'contenido' => '<div>
                                        <section>
                                            <h2>Impacto cultural del juego</h2>
                                            <p>Baldur’s Gate 3 revitalizó el género RPG clásico, generando una comunidad activa de jugadores, fanáticos y creadores de contenido. Su éxito marcó el regreso de las historias profundas y los sistemas complejos de decisiones, recordando la esencia del rol tradicional. Más allá del juego, ha inspirado debates sobre narrativa interactiva, libertad del jugador y ética en los videojuegos modernos. En plataformas y redes sociales, su impacto se siente en mods, fanarts y debates sobre filosofía moral aplicada al gaming. Es más que un título: es una experiencia cultural compartida.</p>
                                        </section>

                                        <section>
                                            <h2>Actualizaciones y expansiones</h2>
                                            <p>Larian Studios ha prometido soporte post-lanzamiento con expansiones, nuevos personajes y mejoras, manteniendo la experiencia fresca y dinámica. Cada actualización trae ajustes al equilibrio del juego, corrección de errores y sorpresas narrativas. Las expansiones prometen profundizar en las historias de personajes secundarios y explorar nuevas zonas del mundo. Esta dedicación de los desarrolladores demuestra un compromiso con la comunidad y asegura que Baldur’s Gate 3 siga siendo relevante por muchos años, consolidándose como un referente del rol contemporáneo.</p>
                                        </section>

                                        <section>
                                            <h2>Innovaciones técnicas</h2>
                                            <img src="images/bg3-blog6-grafico.jpg" alt="Innovaciones Baldur’s Gate 3">
                                            <p>El motor gráfico y la adaptación de D&D 5e permiten interacciones realistas, físicas dinámicas y combates visualmente espectaculares. Cada animación, iluminación y expresión facial contribuye a una inmersión total. La atención al detalle técnico permite que el juego sea tanto una proeza visual como una obra narrativa viva. Además, su arquitectura de decisiones y reactividad sistémica sienta un nuevo estándar en los RPG modernos. Baldur’s Gate 3 no solo brilla por su historia, sino por la forma en que la tecnología y el diseño se fusionan para contarla.</p>
                                        </section>
                                    </div>
                    ',
                    'autor' => 'Karla Drack',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
        ]);
    }
}
