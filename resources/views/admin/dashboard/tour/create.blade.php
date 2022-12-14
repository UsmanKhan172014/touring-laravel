@extends('admin.layouts.dashboardAdmin')
@section('title','Tour Create')
@section('tour','current')
@section('headerName', 'Create Tour')
@section('content')

    @section('css')
        <link rel="stylesheet" type href="/css/bootstrap-tagsinput.css">
        <link rel="stylesheet" type href="/css/tag/app.css">
        <style>
            .bootstrap-tagsinput .tag {
                margin-right: 2px;
                color: white;
            }
            .label-info {
                background-color: #5bc0de;
            }
            .label {
                display: inline;
                padding: .2em .6em .3em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                color: #fff;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: .25em;
            }
            * {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            .bootstrap-tagsinput {
                background-color: #fff;
                border: 1px solid #ccc;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                display: inline-block;
                padding: 4px 6px;
                color: #555;
                vertical-align: middle;
                border-radius: 4px;
                max-width: 100%;
                line-height: 22px;
                cursor: text;
            }

        </style>
    @endsection


    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row pt-md-5 mt-md-3 mb-5">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Create Tour</strong>
                                </div>
                                <div class="card-body card-block">
                                    <form  id="create" method="post" action="{{route('tour.store')}}" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                        <div class="row form-group" id="bloodhound">
                                            <div class="col-lg-6">
                                                <label for="tags" class=" form-control-label"><h3>Tags</h3></label>
                                                <input type="text" data-role="tagsinput" id="blood" name="tags" value="{{old('tags')}}" class="form-control @error('tags') is-invalid @enderror">
                                                @error('tags')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label for="name" class=" form-control-label"><h3>Name</h3></label>
                                                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" required>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label for="nights_to_stay" class=" form-control-label"><h3>Nights To Stay</h3></label>
                                                <input type="number" id="nights_to_stay" name="nights_to_stay" value="{{old('nights_to_stay')}}" class="form-control @error('nights_to_stay') is-invalid @enderror" required>
                                                @error('nights_to_stay')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label for="total_seats" class=" form-control-label"><h3>Total seats</h3></label>
                                                <input type="number" id="total_seats" name="total_seats" value="{{old('total_seats')}}" class="form-control @error('total_seats') is-invalid @enderror" required>
                                                @error('total_seats')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label for="price" class=" form-control-label"><h3>Price</h3></label>
                                                <input type="number" id="price" name="price" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" required>
                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label for="destination_city" class=" form-control-label"><h3>Destination City</h3></label>
                                                <select name="destination_city" id="destination_city" class="form-control @error('destination_city') is-invalid @enderror" required>
                                                    <option value="">Please select</option>
                                                    @if(count($cities)>0)
                                                        @foreach($cities as $city)
                                                            @if(old('destination_city') == $city->id)
                                                                <option selected value="{{$city->id}}">{{$city->name}}</option>
                                                            @else
                                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('destination_city')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="departure_city" class=" form-control-label"><h3>Departure City</h3></label>
                                                <select name="departure_city" id="departure_city" class="form-control @error('departure_city') is-invalid @enderror" required>
                                                    <option value="">Please select</option>
                                                    @if(count($cities)>0)
                                                        @foreach($cities as $city)
                                                            @if(old('departure_city') == $city->id)
                                                                <option selected value="{{$city->id}}">{{$city->name}}</option>
                                                            @else
                                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('departure_city')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label><h3>Departure date</h3></label><br>
                                                <input type="date" name="departure_date" value="{{old('departure_date')}}" style="width: 100%" class="form-control @error('departure_date')is-invalid @enderror">
                                                <span class="invalid-feedback alert alert-danger" role="alert" >
                                                  <strong><i class="fas fa-exclamation-triangle"></i> @error('departure_date'){{$message}} @enderror</strong>
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label><h3>Departure Time</h3></label><br>
                                                <input type="time" name="departure_time" value="{{old('departure_time')}}" style="width: 100%" class="form-control @error('departure_time')is-invalid @enderror">
                                                <span class="invalid-feedback alert alert-danger" role="alert" >
                                                  <strong><i class="fas fa-exclamation-triangle"></i> @error('departure_time'){{$message}} @enderror</strong>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label><h3>Returning date</h3></label><br>
                                                <input type="date" name="returning_date" value="{{old('returning_date')}}" style="width: 100%" class="form-control @error('returning_date')is-invalid @enderror">
                                                <span class="invalid-feedback alert alert-danger" role="alert" >
                                                  <strong><i class="fas fa-exclamation-triangle"></i> @error('returning_date'){{$message}} @enderror</strong>
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label><h3>Returning Time</h3></label><br>
                                                <input type="time" name="returning_time" value="{{old('returning_time')}}" style="width: 100%" class="form-control @error('returning_time')is-invalid @enderror">
                                                <span class="invalid-feedback alert alert-danger" role="alert" >
                                                  <strong><i class="fas fa-exclamation-triangle"></i> @error('returning_time'){{$message}} @enderror</strong>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-12 col-md-12">
                                                <label for="inputContent" class=" form-control-label"><h3>Description</h3></label>
                                                <textarea  rows="7" name="description"class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="file-input" class=" form-control-label">Cover Image</label>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <input type="file" id="file-input" name="image" class="form-control-file" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm" onkeypress="event.preventDefault();" value="submit" form="create">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @section('js')
        <script src="{{asset('js/tag/bootstrap-tagsinput.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/tag/typeahead.bundle.js')}}" type="text/javascript"></script>
        <script>
            var tags = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: '/tag/name',
                    filter: function(list) {
                        return $.map(list, function(tag) {
                            return { name: tag }; });
                    },
                    cache:true,
                    ttl:60000
                }
            });
            tags.initialize();
            $('#blood').tagsinput({
                typeaheadjs: {
                    name: 'tags',
                    displayKey: 'name',
                    valueKey: 'name',
                    source: tags.ttAdapter()
                }
            });
            $(document).ready(function(){
                $(".tt-input").keypress(function(e){
                    if(e.which == 13) {
                        event.preventDefault();
                    }
                });
            });
        </script>
    @endsection
@endsection
