@extends('layouts.index')
@section('formreg')
    <div class="h-75">
        <div class="col-md-12" style="height: 40vh;background-color: green;">

        </div>
        <div class="h-75">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <center><span>
      <div class="dowp-down1" id="collapse1">
          <button class="btn btn-primary col-md-12" type="button" data-toggle="collapse" data-target="#exp1" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 2vh;">
              Choose Package
          </button>
          <div class="collapse" id="exp1">
              <div class="card card-body">
                  <table class="table">
                      <thread>
                          <tr>
                              <th scope="col">TYPE</th>
                              <th scope="col">CATAGORY</th>
                              <th scope="col">PRICE</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Amount</th>
                          </tr>
                      </thread>
                      <tbody>
                @foreach($details as $detail)
                    <tr>
                            <td>{{ $detail->type }}</td>
                           <td>{{ $detail->catagory }}</td>
                           <td>{{ $detail->price }}</td>
                            <td>
                            <div>
                                <input type="button" name="increment" value="-" id="icount" onclick="increment(-1,{{ $detail->id }});deploy('{{ $detail->id }}','{{ $detail->price }}','cost_{{ $detail->id }}');">
                                     <input type="number" id="{{ $detail->id }}" class="count-box" value="0" style="width: 4vh;">
                                <input type="button" name="decrement" value="+" id="dcount" onclick="increment(1,{{ $detail->id }});deploy('{{ $detail->id }}','{{ $detail->price }}','cost_{{ $detail->id }}');">
                            </div>
                            </td>
                        <td>
                            <div id="amt">
                            <input type="text" id="cost_{{ $detail->id }}" class="amount-box">
                            </div>
                        </td>
                    </tr>
                 @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
         <br/>
          <br/>
          <br/>
        <div class="dowp-down2">
            <button class="btn btn-primary col-md-12" id="collapse2" type="button" data-toggle="collapse" data-target="#exp2" aria-expanded="false" aria-controls="collapseExample" style="margin-top: 2vh;" onclick="save();show();">
               Enter detail
            </button>
            <div class="collapse" id="exp2">
                <div class="card card-body">
                    <center><span>
                           <form action="{{ url('/review') }}" method="POST" enctype="multipart/form-data" >
                            Name:<input type="text" name="name" style="width: 15vh;"><br/>
                            E-mail:<input type="email" name="email" style="width: 15vh;"><br/>
                            Contact:<input type="number" name="contact" value="+91" style="width: 15vh;"><br/>
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            Amount:<input type="number" name="amount" readonly="readonly" id="selAmt" style="width: 10vh;">
                            <input type="submit" value="Submit">
                           </form>
                        </span></center>

            </div>
        </div>
    </div>
    </span></center>
        </div>

    <script type="text/javascript">
        var amount;
        var count;
        function deploy(initial,target,fetch) {

            amount = parseInt(target);

            //console.log(amount);

            count = parseInt(document.getElementById(initial).value);

            amount = amount*count;

            document.getElementById(fetch).value = amount;


        }

        //var len = document.getElementById('ticket').length;
        var store;

        function save(){
        $('#amt input[type=text]').each(function () {
            var val = parseInt($(this).val());

            if(val>0){
                store=val;
                return false;
            }
        });
            if(store){
                document.getElementById('selAmt').value = store;
            }else{
                document.getElementById('selAmt').value = 0;
            }

        }
    </script>
@endsection