<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"S></script> -->

<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<style>
  i{
    color: #2fccd0;
  }
</style>
</head>
<body>    
    <!-- <div class="container">
      <h1 class="text-white bg-dark text-center">Modals in Bootstrap 4</h1>
      <button class="btn btn-success" data-target="#Sellbooksmodel" data-toggle="modal">Open Signup</button>
    </div> -->

    <div class="modal fade" id="Sellbooksmodal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 style="color: #2fccd0;">Add Books To Sell</h4>
            <button type="button" class="close" data-dismiss="modal"> &times;</button>
          </div>

          <div class="modal-body">
            <form name="sellbook" action="" method="post" onsubmit="return validatesellbook();">
              <table>
              <div class="form-group">
                  <tr>
                    <td><label><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp; Book Name &nbsp; </label></td>
                    <td><input type="text" name="bookname" class="form-control"></td>
                  </tr>
                   <tr>
                     <td></td>
                     <td id="bookname_Error" class="ml-2 mb-2" style="color: red; display: none">Enter Bookname</td>
                  </tr>
              </div>

              <div class="form-group">
                  <tr>
                    <td><label><i class="fa fa-filter" aria-hidden="true"></i>&nbsp; Category &nbsp; </label></td>
                    <td>
                      <select name="category" class="form-control"> 
                        <option>Engineering</option>
                        <option>Novel</option>
                        <option>Science</option>
                        <option>Commerce</option>
                        <option>Arts</option>
                      </select>
                    </tr>
                    <tr>
                      <td></td>
                      <td id="category_Error" class="ml-2 mb-2" style="color: red; display: none">Enter Category</td>
                    </tr>
              </div>

              <div class="form-group">
                  <tr>
                    <td><label><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; Purchase Date &nbsp; </label></td>
                    <td><input type="date" name="pdate" class="form-control"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td id="purchasedate_Error" class="ml-2 mb-2" style="color: red; display: none">Enter Purchase Date</td>
                  </tr>
              </div>
              
              <div class="form-group">
                  <tr>
                    <td><label><i class="fa fa-money" aria-hidden="true"></i>&nbsp; Price &nbsp; </label></td>
                    <td><input type="text" name="price" class="form-control"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td id="price_Error" class="ml-2 mb-2" style="color: red; display: none">Enter Price</td>
                  </tr>
              </div>

              <div class="form-group">
                  <tr>
                    <td><label><i class="fa fa-question" aria-hidden="true"></i>&nbsp; Book Condition &nbsp; </label></td>
                      <td class="radio">
                        <input type="radio" name="bcondn1" ><label for ="bcondn1"> New </label> 
                        <input type="radio" name="bcondn2" ><label for ="bcondn2"> Moderate </label> 
                        <input type="radio" name="bcondn3" ><label for ="bcondn3"> Old </label>
                        <input type="radio" name="bcondn4" ><label for ="bcondn4"> Very Old </label>
                      </td>
                  </tr>
                  <tr>
                      <td></td>
                      <td id="bookcondn_Error" class="ml-2 mb-2" style="color: red; display: none">Enter BookCondition</td>
                  </tr>  
              </div>

              <div class="form-group">
                  <tr>
                    <td><label><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Contact No &nbsp; </label></td>
                    <td><input type="text" name="contactno" class="form-control"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td id="contactno_Error" class="ml-2 mb-2" style="color: red; display: none">Enter Contact No</td>
                  </tr>
              </div>


              <div class="form-group">
                  <tr>
                    <td><label><i class="fa fa-info" aria-hidden="true"></i>&nbsp; Description &nbsp; </label></td>
                    <td><textarea name="description" class="form-control"></textarea></td>
                  </tr> 
                  <tr>
                    <td></td>
                    <td id="description_Error" class="ml-2 mb-2" style="color: red; display: none">Enter Description</td>
                  </tr>
              </div>

              <div class="form-group">
                <tr>
                  <td><label for=""><i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp; Upload image of book &nbsp;  </label></td>
                  <td><input type="file" name="bookimage" class="form-control"></td>
                </tr>
                <tr>
                  <td></td>
                  <td id="bookimage_Error" class="ml-2 mb-2" style="color: red; display: none">Enter Book Image</td>
                </tr>
              </div>

            </table>
              
              <div class="modal-footer justify-content-center">
                <input type="submit" name="submit" value="Add Book" class="btn btn-primary">
                <input type="submit" name="submit" value="Reset" class="btn btn-secondary">
              </div>
            </form>


            
          </div>
        </div>
      </div>
    </div>
<script src="Javascript/sellbook.js"></script>
</body>
</html>
