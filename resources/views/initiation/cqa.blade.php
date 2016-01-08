@extends('front.template')

@section('main')


<div class="section section-breadcrumbs">
    <div class="row"> 
      <div class="col-md-12"> 
        <h1>Quality Attributes</h1>
      </div>
    </div>
</div>

      
        <table class="table table-bordered table-hover" id="deleteRowTable" name="cqaTable">
        <tr >
            <th class="text-center">
              Quality Attribute
            </th>
            <th class="text-center">
              Target
            </th>
            <th class="text-center">
              Measurement technique
            </th>
            <th class="text-center">
              Comment
            </th>
            <th class="text-center">              
            </th>
          </tr>
            

<form method="post" action="cqa_form.php"> 
  <tr>
    <td>          
      <select type="dropdown" name="quality_att" class="dropdown">
        <option value="item1">The Shawshank Redemption</option>
        <option value="item2">The Godfather</option>
        <option value="item3">Pulp Fiction</option>
        <option value="item4">The Good, the Bad and the Ugly</option>
        <option value="item5">12 Angry Men</option>
      </select>
    </td>
    <td>
      <input type="text" name="target" placeholder="Target" class="form-control"/>
    </td>
    <td>
      <input type="text" name="measure_tech" placeholder="Measurement Technique" class="form-control"/>
    </td>
    <td>
      <input type="text" name="comment" placeholder="Comment" class="form-control"/>
    </td>
    <td></td>
  </tr>
</table>

<div class="container">
  <div class="service-wrapper">
<!--     <div class="col-lg-offset-3 col-lg-12 column"> -->
<!-- <div class="col-lg-3"> -->
       <a id="back_menu" style="color:#25013A;" name="back" href="qbd/services"><i class="icon-list-ol"></i></a>
        <a id="reset" style="color:#535b60;" name="reset"><i class="icon-trash"></i></a>
      <a value="Add Row" onclick="addRow('deleteRowTable')" id="addRow" style="color:#ccd51f;" name="reset"><i class="icon-edit"></i></a>
       <a id="previous" style="color:#ccd51f;" name="previous" href="initiation/qtpp"><i class="icon-backward"></i></a>
       <a id="next" style="color:#ccd51f;" name="next" href="initiation/riskAnalysis"><i class="icon-forward"></i></a>
      <a id="submit" style="color:#076379;" name="submit"><i class="icon-check"></i></a>
    </div>
 <!--  </div>
</div> -->
</div>
<!--NE PAS OUBLIER D'AJOUTER LE BOUTON DOWNLOAD-->
</form>

@stop
