@extends('front.template')

@section('main')

<div class="section section-breadcrumbs">
    <div class="row"> 
      <div class="col-md-12"> 
        <h1>Risk Factors</h1>
      </div>
    </div>
</div>

     <table class="table table-bordered table-hover" id="deleteRowTable" name="paraTable">
        <tr>
             <th class="text-center">
              Material attributes
            </th>
            <th class="text-center">
              Product parameters
            </th>
            <th class="text-center">
              Human factors
            </th>
            <th class="text-center">
              Methods & Measurements
            </th>
            <th class="text-center">
              Environment
            </th>
            <th class="text-center">              
            </th>
          </tr>
        <tr>
<form method="post" action="param_form.php"> 
   
    <td>          
      <select type="dropdown" name='ma' class="dropdown">
        <option value="item1">Data1</option>
        <option value="item2">Data2</option>
        <option value="item3">Data3</option>
        <option value="item4">Data4</option>
        <option value="item5">Data5</option>
        <option value="item6"><!--<input type="text" name="Other" placeholder="Other" class="form-control"/>--></option>
      </select>
    </td>
            <td>
              <select type="dropdown" name='pp' class="dropdown">
        <option value="item1">Data1</option>
        <option value="item2">Data2</option>
        <option value="item3">Data3</option>
        <option value="item4">Data4</option>
        <option value="item5">Data5</option>
      </select>
            </td>
            <td>
              <select type="dropdown" name='hum_fact' class="dropdown">
       <option value="item1">Data1</option>
        <option value="item2">Data2</option>
        <option value="item3">Data3</option>
        <option value="item4">Data4</option>
        <option value="item5">Data5</option>
      </select>
            </td>
             <td>
              <select type="dropdown" name='mm' class="dropdown">
        <option value="item1">Data1</option>
        <option value="item2">Data2</option>
        <option value="item3">Data3</option>
        <option value="item4">Data4</option>
        <option value="item5">Data5</option>
      </select>
            </td>
            <td>
              <select type="dropdown" name='env' class="dropdown">
        <option value="item1">Data1</option>
        <option value="item2">Data2</option>
        <option value="item3">Data3</option>
        <option value="item4">Data4</option>
        <option value="item5">Data5</option>
      </select>
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
      <button type="button" id="next" class="btn" href="">Ishikawa Diagrams <a class="glyphicon glyphicon-arrow-right"> </a> </button>
    </div>
    <div class="col-lg-5">
      <button type="submit" class="btn btn-blue">Submit</button>
    </div>
  </div>
</div>
</form>

@stop