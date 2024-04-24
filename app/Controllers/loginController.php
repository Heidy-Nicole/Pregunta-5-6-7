<?php
//crea un controlador para un login ten en cuenta que el correo esta en persona y solo usamos corre
namespace App\Controllers;

use App\Models\persona_modelo;
use CodeIgniter\Controller;

class loginController extends Controller
{
    public function index()
    {
        return view('loginView');
    }

    public function login()
    {
        $persona = new persona_modelo();
        //de acuerdo al tipo de usuario te mostrara director y cliente
        $data = [
            'persona' => $persona->where('correo', $this->request->getPost('email'))->first()
        ];

        if ($data['persona'] != null) {
            if ($data['persona']['rol'] == 'Director bancario') {
                return redirect()->to('director')->with('data', $data);
            } else {
                return redirect()->to('cliente')->with('data', $data);
            }
        } else {
            return redirect()->to('login');
        }
    }
}