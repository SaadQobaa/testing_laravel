@extends('front.template')

@section('main')

<div class="section section-breadcrumbs">
    <div class="row"> 
      <div class="col-md-12"> 
        <h1>Screen Risk Factors</h1>
      </div>
    </div>
</div>

    <table class="table table-bordered table-hover" id="deleteRowTable" name="DoETable">
        <tr>
             <th class="text-center">
              Factor
            </th>
            <th class="text-center">
              Name
            </th>
            <th class="text-center">
              Unit
            </th>
            <th class="text-center">
              Minimum Value
            </th>
            <th class="text-center">
              Maximum Value
            </th>
            <th class="text-center">              
            </th>
          </tr>
        <tr>
                 <td>
        <form method="POST" action="">     
    <select type="dropdown" name="quality_att" class="dropdown">
        <option>The Shawshank Redemption</option>
        <option>The Godfather</option>
        <option>Pulp Fiction</option>
        <option>The Good, the Bad and the Ugly</option>
        <option>12 Angry Men</option>
    </select>
</form>
</td>
<form method="POST">
            <td>
            <input type="text" name='name' placeholder='Name' class="form-control"/>
            </td>
            <td>
            <input type="text" name='unit' placeholder='Unit' class="form-control"/>
            </td>
             <td>
            <input type="text" name='min' placeholder='Minimum value' class="form-control"/>
            </td>
            <td>
            <input type="text" name='max' placeholder='Maximum value' class="form-control"/>
            </td>
          </form>
            <td></td>
            </tr>
        </table>

<div class="container">
  <div class="col-lg-offset-1 col-lg-11 column">
    <div class="col-lg-4">
    <button id="back_menu" class="btn btn-violet"><a class="glyphicon glyphicon-arrow-left"> QbD menu </a> </button>
  </div>
  <div class="col-lg-4">
    <input type="reset" name="reset" value="Erase all" class="btn btn-grey">
  </div>
  <div class="col-lg-4">
    <button id="add_row" class="btn" onclick="addRow('deleteRowTable')">Add Row</button>
  </div>
  </div>
</div>
<br>
<div class="container">
  <div class="col-lg-12 column">
    <div class="col-lg-offset-3 col-lg-4">
      <button type="button" id="next" class="btn" href="">Risk Analysis <a class="glyphicon glyphicon-arrow-right"> </a> </button>
    </div>
    <div class="col-lg-5">
      <button type="submit" class="btn btn-blue">Submit</button>
    </div>
  </div>
</div>


@stop
