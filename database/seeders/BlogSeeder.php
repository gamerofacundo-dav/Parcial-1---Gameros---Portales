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
                                            <p>
                                                En <strong>Baldur’s Gate 3</strong>, la narrativa comienza con el secuestro por los 
                                                <em>Mind Flayers</em> y la infección por un parásito que impulsa toda la aventura y motiva las decisiones del jugador. 
                                                Desde el primer instante, el juego establece un tono oscuro y misterioso, donde la supervivencia depende tanto del ingenio como de la moral. 
                                                A medida que avanzas, cada encuentro y diálogo amplía las ramificaciones del conflicto, revelando secretos que conectan los destinos de múltiples personajes. 
                                                El jugador no solo vive una historia épica, sino también una reflexión constante sobre el poder, la corrupción y la libertad.
                                            </p>
                                        </section>

                                        <section>
                                            <h2>Personajes principales y aliados</h2>
                                            <p>
                                                Cada compañero tiene su propio trasfondo y motivaciones, desde <em>Shadowheart</em> hasta <em>Lae’zel</em>, ofreciendo distintas perspectivas sobre la historia. 
                                                A través de sus historias personales, el jugador puede explorar temas de redención, venganza, fe y autodescubrimiento. 
                                                Estos personajes no solo sirven como aliados en combate, sino como espejos del protagonista, reflejando las decisiones tomadas y cuestionando los valores del jugador. 
                                                Con diálogos profundamente escritos y un sistema de afinidad que evoluciona según tus actos, cada interacción puede fortalecer o romper vínculos que afectan el desenlace final.
                                            </p>
                                        </section>

                                        <section class="my-5">
                                        <div class="container">
                                            <h2>Primeros desafíos tácticos</h2>
                                            <div class="row align-items-center my-4">
                                                <div class="col-md-6">
                                                    <p>
                                                    El jugador debe adaptarse al sistema de combate por turnos desde el inicio, usando hechizos, objetos y el entorno para superar enemigos y acertijos. 
                                                    Las primeras batallas funcionan como <strong>lecciones prácticas</strong> que enseñan a planificar, observar y anticipar cada movimiento. 
                                                    <em>Baldur’s Gate 3</em> recompensa la experimentación: una caja arrojada al enemigo, una trampa activada a tiempo o una pared de fuego pueden marcar la diferencia entre la derrota y la victoria. 
                                                    La tensión de cada enfrentamiento se combina con la narrativa, logrando que cada combate sea parte esencial de la historia y no un simple obstáculo entre diálogos.
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="/img/blog/content/bg3-blog1-combate.webp" alt="Primeros combates en Baldur’s Gate 3" class="img-fluid rounded shadow-sm">
                                                </div>
                                            </div>
                                        </div>
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
                                            <p>
                                                Los mapas de <strong>Baldur’s Gate 3</strong> están llenos de secretos y rutas ocultas, 
                                                invitando al jugador a explorar cada rincón del mundo. 
                                                Las zonas opcionales recompensan la curiosidad con tesoros, diálogos inéditos y eventos únicos. 
                                                Cada región tiene su propia atmósfera, fauna y arquitectura, reforzando la sensación de un universo vivo. 
                                                Además, la iluminación, el clima y los sonidos ambientales sumergen al jugador en una experiencia donde 
                                                <em>cada paso puede cambiar el curso de la aventura</em>.
                                            </p>
                                        </section>

                                        <section>
                                            <h2>Misiones secundarias interesantes</h2>
                                            <p>
                                                Más allá de la historia principal, el juego ofrece misiones que profundizan en el lore de los 
                                                <em>Reinos Olvidados</em> y permiten tomar decisiones que afectan el mundo. 
                                                Algunas parecen simples al comienzo, pero tienen consecuencias inesperadas más adelante. 
                                                <strong>Baldur’s Gate 3</strong> logra que cada misión secundaria tenga peso narrativo, 
                                                invitando a descubrir no solo recompensas materiales, sino también verdades ocultas 
                                                sobre los personajes y el universo del juego.
                                            </p>
                                        </section>

                                        <section class="my-5">
                                        <div class="container">
                                            <h2>Interacción con NPCs</h2>
                                            <div class="row align-items-center my-4">
                                                <div class="col-md-6">
                                                    <p>
                                                    El diálogo es clave: las decisiones pueden mejorar o romper relaciones, desbloquear recompensas 
                                                    y alterar la historia. Cada NPC tiene una personalidad marcada, con gestos y voces que reflejan sus emociones. 
                                                    Gracias a las tiradas de dados en las conversaciones, el jugador siente que participa en una 
                                                    <em>verdadera partida de rol</em>, donde incluso una palabra puede cambiar un destino.
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="/img/blog/content/bg3-blog2-npcs.webp" alt="Interacción con NPCs en Baldur’s Gate 3" class="img-fluid rounded shadow-sm">
                                                </div>
                                            </div>
                                        </div>
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
                                            <p>
                                                Los enfrentamientos requieren <strong>estrategia</strong> y <strong>creatividad</strong>. 
                                                Cada hechizo, habilidad y movimiento puede cambiar el resultado del combate. 
                                                La clave está en entender la <em>sinergia entre los miembros del grupo</em> y aprovechar sus fortalezas para adaptarse a cada situación. 
                                                En <strong>Baldur’s Gate 3</strong>, la colocación en el terreno y la anticipación de los turnos enemigos son tan importantes como el daño que infliges. 
                                                Los jugadores más experimentados aprenden a combinar efectos, manipular estados alterados y convertir el campo de batalla en un tablero donde la inteligencia supera a la fuerza bruta.
                                            </p>
                                        </section>

                                        <section>
                                            <h2>Uso del entorno</h2>
                                            <p>
                                                El terreno es interactivo: se pueden empujar enemigos, usar barriles explosivos o aprovechar obstáculos para obtener ventaja en combate. 
                                                Esta mecánica fomenta la improvisación y premia la creatividad. 
                                                Un simple <em>charco de agua</em> puede volverse letal con un hechizo eléctrico, mientras que una superficie aceitada puede transformarse en un incendio devastador. 
                                                Cada entorno tiene su propio potencial táctico, y dominarlo implica observar, experimentar y actuar con astucia. 
                                                Este nivel de interacción convierte cada encuentro en un <strong>rompecabezas estratégico</strong> lleno de posibilidades únicas.
                                            </p>
                                        </section>

                                        <section class="my-5">
                                        <div class="container">
                                            <h2>Preparación y planificación</h2>
                                            <div class="row align-items-center my-4">
                                                <div class="col-md-6">
                                                    <p>
                                                    El jugador debe planear ataques, coordinar habilidades del grupo y anticipar acciones enemigas, aumentando la profundidad estratégica. 
                                                    Preparar el terreno antes de un combate puede marcar la diferencia entre una victoria limpia y una derrota total. 
                                                    La gestión de recursos —como hechizos, pociones o puntos de acción— requiere pensar a largo plazo y adaptarse a lo inesperado. 
                                                    <em>Baldur’s Gate 3</em> no perdona la improvisación descuidada: cada turno es una oportunidad para demostrar <strong>astucia</strong>, 
                                                    <strong>paciencia</strong> y conocimiento del sistema de combate más refinado de un RPG moderno.
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="/img/blog/content/bg3-blog3-combate.webp" alt="Estrategia de combate en Baldur’s Gate 3" class="img-fluid rounded shadow-sm">
                                                </div>
                                            </div>
                                        </div>
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
                                            <p>
                                                <strong>Baldur’s Gate 3</strong> permite elegir entre múltiples clases y razas, cada una con habilidades y ventajas únicas que afectan tanto el combate como las interacciones. 
                                                Desde magos que manipulan la realidad hasta bárbaros que confían en su furia, el juego ofrece una amplia variedad de estilos de juego. 
                                                Cada clase abre nuevas opciones de diálogo, caminos narrativos y estrategias de grupo, convirtiendo la personalización en una herramienta narrativa. 
                                                La posibilidad de <em>multiclasificar</em> y adaptar tu personaje refuerza la sensación de libertad, permitiéndote crear un héroe o villano verdaderamente propio.
                                            </p>
                                        </section>

                                        <section>
                                            <h2>Elecciones morales</h2>
                                            <p>
                                                Las decisiones del jugador impactan la historia, desde salvar a un NPC hasta sacrificar a un aliado, creando múltiples finales posibles. 
                                                No existen respuestas correctas, solo consecuencias. 
                                                <em>Baldur’s Gate 3</em> juega con la moralidad del jugador, empujándolo a elegir entre lo justo y lo pragmático. 
                                                Algunas decisiones parecen pequeñas, pero resuenan más adelante de formas inesperadas. 
                                                Esta red de causas y efectos da un <strong>peso emocional real</strong> a cada acción, haciendo que el jugador sienta la carga de sus elecciones en el mundo y en sí mismo.
                                            </p>
                                        </section>

                                        <section class="my-5">
                                        <div class="container">
                                            <h2>Rol de los hechizos y habilidades</h2>
                                            <div class="row align-items-center my-4">
                                                <div class="col-md-6">
                                                    <p>
                                                    Seleccionar las habilidades adecuadas para cada situación es crucial; algunos encuentros requieren ingenio y conocimiento de las reglas de <em>D&D 5e</em>. 
                                                    Cada hechizo tiene su momento perfecto: desde una simple ilusión que evita un enfrentamiento hasta una bola de fuego que cambia el rumbo del combate. 
                                                    Además, las habilidades fuera de combate también influyen en la historia, desbloqueando nuevos caminos, soluciones pacíficas o formas creativas de superar obstáculos. 
                                                    <strong>Baldur’s Gate 3</strong> convierte cada punto de habilidad en una oportunidad para expresar tu estilo de juego y moldear el mundo a tu manera.
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="/img/blog/content/bg3-blog4-magias.webp" alt="Hechizos en Baldur’s Gate 3" class="img-fluid rounded shadow-sm">
                                                </div>
                                            </div>
                                        </div>
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
                                            <p>
                                                El juego explora la amenaza de los <em>Mind Flayers</em> y su parásito, tejiendo un hilo narrativo que conecta cada aventura y conflicto del jugador. 
                                                Estas criaturas psiónicas representan una de las fuerzas más inquietantes de los <em>Reinos Olvidados</em>, tanto por su poder como por su manipulación mental. 
                                                A medida que la historia avanza, se revelan sus verdaderos objetivos y la magnitud de su influencia. 
                                                El jugador, infectado y al borde de perder su humanidad, se enfrenta a una constante tensión entre aprovechar el poder del parásito o resistir su corrupción.
                                            </p>
                                        </section>

                                        <section>
                                            <h2>Relaciones entre facciones</h2>
                                            <p>
                                                Diferentes grupos dentro del juego tienen intereses contrapuestos. 
                                                La forma en que interactúes con ellos influye en la historia y en tus recompensas. 
                                                Algunas facciones buscan <strong>poder</strong>, otras <strong>redención</strong> y otras simplemente sobrevivir. 
                                                Formar alianzas puede traer ventajas, pero también enemigos peligrosos. 
                                                Las tensiones entre los <em>githyanki</em>, los <em>druidas</em>, los <em>goblins</em> y los <em>tieflings</em> crean un ecosistema político donde cada acción del jugador repercute en todo <strong>Faerûn</strong>. 
                                                Tomar partido no solo cambia los diálogos, sino que reconfigura el equilibrio del mundo mismo.
                                            </p>
                                        </section>

                                        <section class="my-5">
                                        <div class="container">
                                            <h2>Explorando ruinas antiguas</h2>
                                            <div class="row align-items-center my-4">
                                                <div class="col-md-6">
                                                    <p>
                                                    Las ruinas esconden secretos y tesoros, y a menudo presentan desafíos que requieren resolver acertijos y aplicar estrategia. 
                                                    Estas zonas ofrecen un vistazo a civilizaciones perdidas y a los orígenes de los <em>Mind Flayers</em>. 
                                                    Cada ruina está llena de trampas, enigmas y recompensas ocultas para quienes se atrevan a explorar. 
                                                    Aventurarse en estos lugares no solo otorga equipamiento valioso, sino también fragmentos de historia que amplían el universo del juego, 
                                                    demostrando que <strong>Baldur’s Gate 3</strong> es tanto una experiencia de combate como de descubrimiento arqueológico y narrativo.
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="/img/blog/content/bg3-blog5-ruinas.webp" alt="Ruinas en Baldur’s Gate 3" class="img-fluid rounded shadow-sm">
                                                </div>
                                            </div>
                                        </div>
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
                                            <p>
                                                <strong>Baldur’s Gate 3</strong> revitalizó el género <em>RPG clásico</em>, generando una comunidad activa de jugadores, fanáticos y creadores de contenido. 
                                                Su éxito marcó el regreso de las historias profundas y los sistemas complejos de decisiones, recordando la esencia del rol tradicional. 
                                                Más allá del juego, ha inspirado debates sobre narrativa interactiva, libertad del jugador y ética en los videojuegos modernos. 
                                                En plataformas y redes sociales, su impacto se refleja en <strong>mods, fanarts</strong> y discusiones sobre <em>filosofía moral aplicada al gaming</em>. 
                                                Es más que un título: es una <strong>experiencia cultural compartida</strong>.
                                            </p>
                                        </section>

                                        <section>
                                            <h2>Actualizaciones y expansiones</h2>
                                            <p>
                                                <em>Larian Studios</em> ha prometido soporte post-lanzamiento con expansiones, nuevos personajes y mejoras, manteniendo la experiencia fresca y dinámica. 
                                                Cada actualización trae ajustes al equilibrio del juego, correcciones de errores y sorpresas narrativas. 
                                                Las expansiones buscan profundizar en las historias de personajes secundarios y explorar nuevas zonas del mundo. 
                                                Esta dedicación de los desarrolladores demuestra un <strong>compromiso genuino con la comunidad</strong> y asegura que <strong>Baldur’s Gate 3</strong> siga siendo relevante durante muchos años, consolidándose como un referente del rol contemporáneo.
                                            </p>
                                        </section>

                                        <section class="my-5">
                                        <div class="container">
                                            <h2>Innovaciones técnicas</h2>
                                            <div class="row align-items-center my-4">
                                                <div class="col-md-6">
                                                    <p>
                                                    El motor gráfico y la adaptación de <em>D&D 5e</em> permiten interacciones realistas, físicas dinámicas y combates visualmente espectaculares. 
                                                    Cada animación, iluminación y expresión facial contribuye a una inmersión total. 
                                                    La atención al detalle técnico convierte al juego en una <strong>proeza visual y narrativa</strong>. 
                                                    Además, su arquitectura de decisiones y reactividad sistémica establece un nuevo estándar en los <em>RPG modernos</em>. 
                                                    <strong>Baldur’s Gate 3</strong> no solo brilla por su historia, sino por la forma en que la tecnología y el diseño se fusionan para contarla.
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="/img/blog/content/bg3-blog6-grafico.webp" alt="Innovaciones técnicas en Baldur’s Gate 3" class="img-fluid rounded shadow-sm">
                                                </div>
                                            </div>
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
