<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Client;
use App\Subservice;
use App\Service;
use App\Location;

class AppController extends Controller
{
    //
    function getProjects(Request $request){
      return Project::with('location')->with('client')->get()->toJson();
    }
    function getProject(Request $request,$id){
      return Project::find($id)->with('location')->with('client')->get()->toJson();
    }
    function getClients(Request $request){
      return Client::All()->toJson();
    }
    function getLocations(Request $request){
      return Location::All()->toJson();
    }
    function getServices(Request $request){
      return Project::with('location')->with('client')->get()->toJson();
    }
    function getSubservices(Request $request){
      return Project::with('location')->with('client')->get()->toJson();
    }
    function addProject(Request $request){
      $project = new Project;
      $project->name = $request->name;
      $project->project_manager = $request->project_manager;
      $project->description = $request->description;
      $project->initial_fees = $request->initial_fees;
      $project->client_id = $request->client_id;
      $project->location_id = $request->location_id;
      $project->save();

      return "success";

    }
    function updateProject(Request $request){
      $project = Project::find($request->id);
      $project->name = $request->name;
      $project->project_manager = $request->project_manager;
      $project->description = $request->description;
      $project->initial_fees = $request->initial_fees;
      $project->client_id = $request->client_id;
      $project->location_id = $request->location_id;
      $project->save();

      return "success";

    }
    function deleteProject(Request $request,$id){
      $project = Project::find($id);
      $project->delete();
      return "success";
    }
}
