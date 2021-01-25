<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CustomerEloquentRepository;

/**
 * @group customer
 */
class CustomerController extends Controller
{
    protected $customers;
    public function __construct(
        CustomerEloquentRepository $customers)
    {
        $this->customers = $customers;
    }

    /**
     * index
     */

    public function index()
    {
        $result = $this->customers->getAll();
        return response()->json($result);
        // return api_success(
        //     array('data' => $result)
        // );
        
    }

    /**
     * store
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $result = $this->customers->create($data);
        return api_success(
            array('data' => $result)
        );
    }
    /**
     * show
     */
    public function show($id)
    {
        $result = $this->customers->find($id);
        return api_success(
            array('data' => $result)
        );
    }

    
    

    /**
     * update
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $result = $this->customers->update($id, $data);
        return api_success(
            array('data' => $result)
        );
    }

    /**
     * destroy
     * @urlparam id int required 
     */
    public function destroy($id)
    {
        $this->customers->delete($id);
        return api_success(
            array('data' =>"ok")
        );
    }
}
