<?php
	/**
	 * Created by PhpStorm.
	 * User: Chris
	 * Date: 26/04/2018
	 * Time: 06:11 PM
	 */

	namespace App\Globals;

	class Utils {

		public static function responseSuccess($message,$code,$data){
			return response()->json([
				KeysResponse::KEY_STATUS  => KeysResponse::STATUS_SUCCESS,
				KeysResponse::KEY_MESSAGE => $message,
				KeysResponse::KEY_DATA    => $data
			], $code);
		}

		public static function responseError($message,$code,$data = null){
			return response()->json([
				KeysResponse::KEY_STATUS  => KeysResponse::STATUS_ERROR,
				KeysResponse::KEY_MESSAGE => $message,
				KeysResponse::KEY_DATA    => $data,
			], $code);
		}

		public static function responseNotFound($message,$code,$data = null){
			return response()->json([
				KeysResponse::KEY_STATUS  => KeysResponse::STATUS_NOT_FOUND,
				KeysResponse::KEY_MESSAGE => $message,
				KeysResponse::KEY_DATA    => $data,
			], $code);
		}

	}