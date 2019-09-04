<?php
	/**
	 * Created by PhpStorm.
	 * User: ceindetecpc
	 * Date: 24/04/18
	 * Time: 10:25 AM
	 */

	namespace App\Globals;

	class KeysResponse {

		/*************************************************************************************************************************
		 * Status
		 ************************************************************************************************************************/
		/**
		 * @global String constante para la llave de exito
		 */
		const STATUS_SUCCESS = "success";
		/**
		 * @global String constante para los elementos no encontrados
		 */
		const STATUS_NOT_FOUND = "not_found";
		/**
		 * @global String constante para la llave de error
		 */
		const STATUS_ERROR = "error";
		/*************************************************************************************************************************
		 * Keys
		 *************************************************************************************************************************/
		/**
		 * @global String constante para la key del estatus
		 */
		const KEY_STATUS = "status";
		/**
		 * @global String constante para la llave del mensage de la respuesta
		 */
		const KEY_MESSAGE = "message";
		/**
		 * @global String constante para la llave de la data por si la respuesta lleva data
		 */
		const KEY_DATA = "data";
	}