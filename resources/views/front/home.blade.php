@extends('layout.main')

@section('title','| Question Art')

@section('content')

	<section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to Question Art Online Store
                </strong>
            </h2>
            <br>
            <a href="{{url('/shirts')}}"><button style='margin-top:70px;' class="button large">Check out Our Products</button></a>
    </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            Question Art&rsquo;s Latest Shirts
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        
        <div class="row">
            @forelse(($shirts->chunk(4)) as $chunk)
                @foreach($chunk as $shirt)
                <div class="small-3 columns">
                    <div class="item-wrapper">
                        <div class="img-wrapper">
                            <a class="button expanded add-to-cart">
                                Add to Cart
                            </a>
                            <a href="#">
                                <img src="{{url('images',$shirt->image)}}"/>
                            </a>
                        </div>
                        <a href="{{route('shirt')}}">
                            <h3>
                                {{$shirt->name}}
                            </h3>
                        </a>
                        <h5>
                            R {{$shirt->price}}
                        </h5>
                        <p>
                            {{$shirt->description}}
                        </p>
                    </div>
                </div>
                @endforeach
                @empty
                <h4>No Products</h4>
            @endforelse
        </div>

@stop