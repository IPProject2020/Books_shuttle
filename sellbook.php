<!DOCTYPE html>
<html>

<head>
    <title>Book Shuttle</title>
    <meta charset='utf-8'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='index.js'></script>
</head>

<body>
    <!-- <div class="container">
      <h1 class="text-white bg-dark text-center">Modals in Bootstrap 4</h1>
      <button class="btn btn-success" data-target="#Sellbooksmodal" data-toggle="modal">Open Signup</button>
    </div> -->

    <div class="modal fade" id="Sellbooksmodal">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Add Books To Sell</h4>
            <button type="button" class="close" data-dismiss="modal"> &times;</button>
          </div>

          <div class="modal-body">
            <form name="sellbook" method="post" id="myForm" action="homepage2.php" enctype="multipart/form-data">
              <table>
              <div class="form-group">
                  <tr class="my-2">
                    <td><label for="bookname"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;Book Name<span style="color: red;">*</span></label></td>
                    <td><input type="text" id="bookname" name="bookname" class="form-control"></td>
                  </tr>
                  <tr>
                    <td><td>
                  </tr>
              </div>

              <div class="form-group">
                  <tr>
                    <td><label><i class="fa fa-filter" aria-hidden="true"></i>&nbsp;Category</label></td>
                    <td>
                      <select name="category" class="form-control"> 
                        <option>Engineering</option>
                        <option>Novel</option>
                        <option>Science</option>
                        <option>Commerce</option>
                        <option>Arts</option>
                      </select>
                    </tr>
                    <tr><td></td></tr>
              </div>
              <div class="form-group">
                  <tr>
                    <td><label for="purchasedate"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Purchase Date<span style="color: red;">*</span> </label></td>
                    <td><input type="date" id="pdate" name="pdate" class="form-control"></td>
                  </tr>
                  <tr><td></td><tr>
              </div>
              
              <div class="form-group">
                  <tr>
                    <td><label for="price"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Price<span style="color: red;">*</span> </label></td>
                    <td><input type="text" id="price" name="price" class="form-control"></td>
                  </tr>
                  <tr>
                   <td></td>
                   <td><p id="priceErr" style="color:red;" ></p></td>
                  </tr>
              </div>

              <div class="form-group">
                  <tr>
                    <td><label for="bookcondn"><i class="fa fa-question" aria-hidden="true"></i>&nbsp;Book Condition<span style="color: red;">*</span></label></td>
                      <td class="radio">
                        <input type="radio" name="bcondn1" ><label for ="bcondn1">&nbsp;New </label> 
                        <input type="radio" name="bcondn2" ><label for ="bcondn2">&nbsp;Moderate </label> 
                        <input type="radio" name="bcondn3" ><label for ="bcondn3">&nbsp;Old </label>
                        <input type="radio" name="bcondn4" ><label for ="bcondn4">&nbsp;Very Old </label>
                      </td>
                  </tr> 
              </div>

              <div class="form-group">
                  <tr>
                    <td><label for="contactno"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Contact No<span style="color: red;">*</span></label></td>
                    <td><input type="text" id="contactno" value="" name="" class="form-control"></td>
                  </tr>
                  <tr>
                   <td></td>
                   <td><p id="contactErr" style="color:red;"></p></td>
                  </tr>
              </div>


              <div class="form-group">
                  <tr>
                    <td><label for="description"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;Description</label></td>
                    <td><textarea id="description" name="description"class="form-control"></textarea></td>
                  </tr> 
              </div>

              <div class="form-group">
                <tr>
                  <td><label for="bookimage"><i class="fa fa-file-image-o" aria-hidden="true"></i>&nbsp;Upload image of Book<span style="color: red;">*</span></label></td>
                  <td><input type="file" id="book_image" name="bookimage" class="form-control"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><p id="imagepreviewErr" style="color:red;"></p></td>
              </tr>
              </div>

            </table>
              
              <div class="modal-footer justify-content-center">
                <input type="submit" name="btnSubmit" value="Add Book" class="btn btn-primary" onclick="validatesellbook()">
                <input type="submit" name="btnSubmit" value="Reset" class="btn btn-secondary">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- <div>
        <footer class="page-footer">
            <small>© Copyright 2018. All rights reserved.</small>
            <ul>
                <li>
                    <a href="" target="_blank">
                        <i class="icon ion-logo-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <i class="icon ion-logo-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <i class="icon ion-logo-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="" target="_blank">
                        <i class="icon ion-logo-github"></i>
                    </a>
                </li>
            </ul>
        </footer>
    </div> -->
</body>

</html>