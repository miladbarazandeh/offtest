@extends('layouts.app', ['activePage' => 'requests', 'titlePage' => "درخواست‌ها"])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <p class="card-category">درخواست‌ها</p>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row" >
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <form class="col-md-5 col-xs-12">
                                <div class="input-group no-border">
                                    <input type="text" name= "q" value="" class="form-control" placeholder="جستجو...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </form>
                                <div class="row col-xs-12">
                                    @foreach($requests as $request)
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <div class="card card-body">
                                                <a href="{{route('product', ['id' => $request['promotion']['id']])}}"><img class="img-thumbnail" src="http://127.0.0.1:8001/image/{{$request['promotion']['image']}}" alt=""></a>
                                                <div class="col-sm-12 my-1">
                                                    <p class="text-center text-darkblue">{{$request['promotion']['title']}}</p>
                                                </div>
                                                <a class="btn btn-warning" href="{{route('product', ['id' => $request['promotion']['id']])}}">تایید</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection