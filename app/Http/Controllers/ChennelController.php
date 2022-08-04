<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChennelController extends  Controller{
    /**
     * @OA\Get(
     *      path="/channels/{alias}",
     *      operationId="getListAvailableChannel",
     *      tags={"Channels"},
     *      summary="Получение списка доступных драйверов для канала",
     *      description="Метод возвращает данные ...",
     *     @OA\Parameter(
     *          name="alias",
     *          description="Alias канала (email)",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *     @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *     @OA\JsonContent(ref="#/components/schemas/Channel")
     *       ),
     *     )
     */
//    public function getListAvailableChannel()
//    {
//        //...
//    }
    /**
     * * @OA\Get(
     *      path="/channels/",
     *      operationId="getChannels",
     *      tags={"Channels"},
     *      summary="Получить список всех доступных каналов",
     *      description="Получаем список всех доступных каналов",
     *     @OA\Response(
     *         response=200,
     *          description="successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Channel")
     *       ),
     *      @OA\Response(
     *         response=400,-n
     *         description="Invalid ID supplied"
     *      )
     *     )
     */
//    public function getChannels()
//    {
//        //...
//    }

}

