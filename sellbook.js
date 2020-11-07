function validatesellbook() {
    var myForm = document.getElementById("myForm")
    var bookname = document.getElementById("bookname");
    var purchasedate = document.getElementById("pdate");
    var price = document.getElementById("price").value;
    var bc1 = document.sellbook.bcondn1;
    var bc2 = document.sellbook.bcondn2;
    var bc3 = document.sellbook.bcondn3;
    var bc4 = document.sellbook.bcondn4;
    var contactno = document.getElementById("contactno");
    var description = document.getElementById("description");
    var bookimage = document.getElementById("book_image");

    if (bookname.value.trim() == "" || description.value.trim() == "" || purchasedate.value == "" || price.value == "") {
        alert("Fill in all the details");
        // return false;
    }
    if (validateBcondn(bc1, bc2, bc3, bc4)) {
        if (validateprice(price)) {
            if (validatecontactno(contactno)) {
                if (validatefile(bookimage)) {
                    myForm.submit();
                } else {
                    myForm.addEventListener("submit", function(event) {
                        event.preventDefault();
                    })
                }
            } else {
                myForm.addEventListener("submit", function(event) {
                    event.preventDefault();
                })
            }
        } else {
            myForm.addEventListener("submit", function(event) {
                event.preventDefault();

            })
        }
    } else {
        myForm.addEventListener("submit", function(event) {
            event.preventDefault();

        })
    }
    return false;
}

function validateBcondn(bc1, bc2, bc3, bc4) {
    x = 0;
    if (bc1.checked == true) {
        x++;
    }
    if (bc2.checked == true) {
        x++;
    }
    if (bc3.checked == true) {
        x++;
    }
    if (bc4.checked == true) {
        x++;
    }
    if (x == 0) {
        alert("Select one Book Condition.");
        return false;
    }
    return true;
}

function validateprice(price) {
    if (!isNaN(Number(price))) {
        document.getElementById("priceErr").innerHTML = "";
        return true;
    } else {
        document.getElementById("priceErr").innerHTML = "**Enter Valid Price";
        // alert("You have entered Invalid Price!,Enter Numeric Value Only");
        return false;
    }
}

function validatecontactno(contactno) {
    var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (contactno.value.match(phoneNum)) {
        document.getElementById("contactErr").innerHTML = "";
        return true;
    } else {
        document.getElementById("contactErr").innerHTML = "**Enter Valid Contact Number";
        // alert("Enter Valid ContactNo!");
        return false;
    }
}

function validatefile(bookimage) {
    var filepath = bookimage.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (!allowedExtensions.exec(filepath)) {
        alert("Upload Files having extensions .jpg/.jpeg/.png/.gif only.");
        bookimage.value = "";
        return false;
    } else {
        alert("Successfully Added Books To Sell.");
        return true;
    }
}