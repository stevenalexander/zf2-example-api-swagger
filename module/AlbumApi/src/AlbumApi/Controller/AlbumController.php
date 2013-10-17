<?php
namespace AlbumApi\Controller;

use AlbumApi\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

/**
 * @SWG\Resource(
 *     apiVersion="1.0.0",
 *     swaggerVersion="1.2",
 *     resourcePath="/album",
 *     basePath="http://zf2-example-api-swagger/album"
 * )
 *
 * @SWG\Api(
 *     path="/album/{albumId}",
 *     description="Operations about albums",
 *     @SWG\Operations(
 *         @SWG\Operation(
 *             method="GET", summary="Find album by ID", notes="Returns an album based on ID", type="Album", nickname="get"
 *         ),
 *         @SWG\Operation(
 *             method="DELETE", summary="Delete album by ID", notes="Returns confirmation string", type="Album", nickname="delete"
 *         )
 *     )
 * )
 */
class AlbumController extends AbstractRestfulJsonController
{
    public function getList()
    {   // Action used for GET requests without resource Id
        return new JsonModel(
            array('data' =>
                array(
                    array('id'=> 1, 'name' => 'Mothership', 'band' => 'Led Zeppelin'),
                    array('id'=> 2, 'name' => 'Coda',       'band' => 'Led Zeppelin'),
                )
            )
        );
    }

    public function get($id)
    {   // Action used for GET requests with resource Id
        return new JsonModel(array("data" => array('id'=> 2, 'name' => 'Coda', 'band' => 'Led Zeppelin')));
    }

    public function create($data)
    {   // Action used for POST requests
        return new JsonModel(array('data' => array('id'=> 3, 'name' => 'New Album', 'band' => 'New Band')));
    }

    public function update($id, $data)
    {   // Action used for PUT requests
        return new JsonModel(array('data' => array('id'=> 3, 'name' => 'Updated Album', 'band' => 'Updated Band')));
    }

    public function delete($id)
    {   // Action used for DELETE requests
        return new JsonModel(array('data' => 'album id 3 deleted'));
    }
}