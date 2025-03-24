namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Alumno;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlumnoControllerTest extends TestCase
{
    use RefreshDatabase;

    // Prueba para listar alumnos
    public function test_listar_alumnos()
    {
        // Crear dos alumnos de prueba
        Alumno::factory()->count(2)->create();

        // Hacer una petición GET a la ruta de índice
        $response = $this->get(route('alumnos.index'));

        // Verificar que la respuesta sea exitosa
        $response->assertStatus(200);

        // Verificar que los alumnos se muestren en la vista
        $response->assertSee(Alumno::first()->nombre);
    }

    // Prueba para mostrar el formulario de creación
    public function test_mostrar_formulario_creacion()
    {
        $response = $this->get(route('alumnos.create'));
        $response->assertStatus(200);
    }

    // Prueba para crear un alumno
    public function test_crear_alumno()
    {
        $data = [
            'nombre' => 'Juan Pérez',
            'correo' => 'juan@example.com',
            'fecha_nacimiento' => '2000-01-01',
            'ciudad' => 'Ciudad de México',
        ];

        $response = $this->post(route('alumnos.store'), $data);
        $response->assertRedirect(route('alumnos.index'));
        $this->assertDatabaseHas('alumnos', $data);
    }

    // Prueba para mostrar los detalles de un alumno
    public function test_mostrar_detalles_alumno()
    {
        $alumno = Alumno::factory()->create();
        $response = $this->get(route('alumnos.show', $alumno));
        $response->assertStatus(200);
        $response->assertSee($alumno->nombre);
    }

    // Prueba para mostrar el formulario de edición
    public function test_mostrar_formulario_edicion()
    {
        $alumno = Alumno::factory()->create();
        $response = $this->get(route('alumnos.edit', $alumno));
        $response->assertStatus(200);
        $response->assertSee($alumno->nombre);
    }

    // Prueba para actualizar un alumno
    public function test_actualizar_alumno()
    {
        $alumno = Alumno::factory()->create();
        $data = [
            'nombre' => 'Nombre Actualizado',
            'correo' => 'nuevo@example.com',
            'fecha_nacimiento' => '1999-12-31',
            'ciudad' => 'Nueva Ciudad',
        ];

        $response = $this->put(route('alumnos.update', $alumno), $data);
        $response->assertRedirect(route('alumnos.index'));
        $this->assertDatabaseHas('alumnos', $data);
    }

    // Prueba para eliminar un alumno
    public function test_eliminar_alumno()
    {
        $alumno = Alumno::factory()->create();
        $response = $this->delete(route('alumnos.destroy', $alumno));
        $response->assertRedirect(route('alumnos.index'));
        $this->assertDatabaseMissing('alumnos', ['id' => $alumno->id]);
    }
}