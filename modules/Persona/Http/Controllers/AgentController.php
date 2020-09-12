<?php

namespace Modules\Persona\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Modules\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Modules\Persona\Http\Requests\AgentRequest;
use Modules\Persona\Models\Agent;

class AgentController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $limit = $request->get('limit', 5);
        $agent = new Agent();

        if ($limit != -1)
            $agents = $agent->paginate($limit);
        else
            $agents = $agent->all();

        return $this->successResponse($agents, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Agent $agent
     *
     * @return JsonResponse
     */
    public function show(Agent $agent)
    {
        return response()->json($agent, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AgentRequest $request
     *
     * @return JsonResponse
     */
    public function store(AgentRequest $request)
    {
        $data = $request->all();
        $agent = Agent::create($data);
        return response()->json($agent, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AgentRequest $request
     * @param Agent $agent
     *
     * @return JsonResponse
     */
    public function update(AgentRequest $request, Agent $agent)
    {
        $agent = $agent->update($request->all());
        return response()->json($agent, 201);
    }

    /**
     *  Update multiple agents in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkUpdate(Request $request)
    {
        $data = $request->get('data');
        foreach ($data as $key => $item) {
            Agent::where('id', $key)->update($item);
        }
        return $this->index(request());
    }

    /**
     * Delete multiple agents in the database
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->get('ids');
        Agent::whereIn('id', $ids)->delete();
        return $this->index(request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Agent $agent
     *
     * @return JsonResponse
     *
     * @throws Exception
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return response()->json('Deleted with success.', 202);
    }
}
