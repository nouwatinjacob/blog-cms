@extends('layouts.app')

@section('content')
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        POSTED
                    </div>
                    <div class="panel-body text-center">
                        <h3>{{$posts_count}}</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            TRASHED
                        </div>
                        <div class="panel-body text-center">
                            <h3>{{$trashed_count}}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                        <div class="panel panel-success">
                            <div class="panel-heading text-center">
                                USERS
                            </div>
                            <div class="panel-body text-center">
                                <h3>{{$users_count}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading text-center">
                                    CATEGORIES
                                </div>
                                <div class="panel-body text-center">
                                    <h3>{{$categories_count}}</h3>
                                </div>
                            </div>
                        </div>
        
@endsection
