@extends('master')
@section('content')

  <div class="trending-wrapper">

   <div class="row">
       <table class="table table-stripped">
           <tbody>
               <tr>
               <td>Amount</td>
               <td>{{$total}}</td>
               </tr>
               <tr>
                <td>Tax</td>
                <td>0 $</td>
                </tr>
                <tr>
                    <td>Delivary</td>
                    <td>10 $</td>
                    </tr>
                    <tr>
                        <td> Total Amount</td>
                        <td>{{$total + 10}}</td>
                        </tr>
           </tbody>
       </table>
       <form action="/orderplace" method="POST">
        @csrf
        <div class="form-group">
            <label >Address</label> <br>
          <textarea name="address"  cols="90" rows="7"></textarea>
        </div>
        <div class="form-group">
          <label >Payment Method</label> <br>
          <input type="radio" value="cash"   name="pmw" > <small>Online Payment</small><br>
          <input type="radio" value="cash"   name="pmw" > <small>Payment on Delivary</small> <br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>

  </div>


@endsection

