function myFn() {


    tb1 = document.getElementById('user_id');
    sp1 = document.getElementById('sp1');
    tb2 = document.getElementById('password');
    sp2 = document.getElementById('sp2');
    c = 0;
    if (tb1.value == '') {
        tb1.style.borderColor = 'red';
        sp1.innerHTML = 'Please enter user_id';
        sp1.style.color = 'red';
        c++;
    } else {
        tb1.style.borderColor = '';
        sp1.innerHTML = '';
    }

    if (tb2.value == '') {
        tb2.style.borderColor = 'red';
        sp2.innerHTML = 'Please enter password';
        sp2.style.color = 'red';
        c++;
    } else {
        tb2.style.borderColor = '';
        sp2.innerHTML = '';
    }



    if (c != 0) {
        return false;
    } else {
        return true;
    }
}