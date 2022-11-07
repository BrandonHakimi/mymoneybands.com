
function AddBill() {
    do {
        var Continue = 1;
        var BillName = prompt("Who is this Bill due to? (Company or Label)");
        var BillValue = prompt("What is the Payment Amount for this Bill?");
        var BillDate = prompt("What is the date that this Bill is due?");
        WriteTo(BillName, BillPayment, BillDate);
        var UserContinue = prompt("Do you have another Bill that you would like to enter? 1 for Yes or 0 for No");
        if (UserContinue === 1) {
            Continue = 1;
        } else {
            Continue = 0;
        }
    } while (Continue === 1);
}



