<?php

namespace App\Globals;

class CodesResponse
{

    /**
     * @global int Codigo de respuesta satisfactoria
     */
    const CODE_OK = 200;
    /**
     * @global int Codigo de respuesta de creacion de elemento
     */
    const CODE_CREATED = 201;
    /**
     * @global int Codigo de respuesta de peticion erronea
     */
    const CODE_BAD_REQUEST = 400;
    /**
     * @global int Codigo de respuesta de sin autorizacion
     */
    const CODE_UNAUTHORIZED = 401;
    /**
     * @global int Codigo de respuesta de peticiones prohibidas
     */
    const CODE_FORBIDDEN = 403;
    /**
     * @global int Codigo de respuesta de elemento no encontrado
     */
    const CODE_NOT_FOUND = 404;
    /**
     * @global int Codigo de error en la validacion de un formulario
     */
    const CODE_FORM_INVALIDATE = 422;
    /**
     * @global int Codigo de error en la ejecucion de una orden
     */
    const CODE_INTERNAL_SERVER = 500;
}
