function myFn() {

    tb1 = document.getElementById('staff_name');
    tb2 = document.getElementById('staff_place');
    tb3 = document.getElementById('staff_contact');
    tb4 = document.getElementById('staff_dept');
    tb5 = document.getElementById('user_id');
    tb6 = document.getElementById('create_password');
    tb7 = document.getElementById('confirm_password');
    sp1 = document.getElementById('sp1');
    sp2 = document.getElementById('sp2');
    sp3 = document.getElementById('sp3');
    sp4 = document.getElementById('sp4');
    sp5 = document.getElementById('sp5');
    sp6 = document.getElementById('sp6');
    sp7 = document.getElementById('sp7');
    c = 0;
    if (tb1.value == '') {
        tb1.style.borderColor = 'red';
        sp1.innerHTML = 'Please enter student name';
        sp1.style.color = 'red';
        c++;
    } else {
        tb1.style.borderColor = '';
        sp1.innerHTML = '';
    }
    if (tb2.value == '') {
        tb2.style.borderColor = 'red';
        sp2.innerHTML = 'Please enter student place';
        sp2.style.color = 'red';
        c++;
    } else {
        tb2.style.borderColor = '';
        sp2.innerHTML = '';
    }
    if (tb3.value == '') {
        tb3.style.borderColor = 'red';
        sp3.innerHTML = 'Please enter student contact';
        sp3.style.color = 'red';
        c++;
    } else {
        if (isNaN(tb3.value)) {
            tb3.style.borderColor = 'red';
            sp3.innerHTML = 'Please enter a numeric value!!!';
            sp3.style.color = 'red';
            c++;

        } else {
            tb3.style.borderColor = '';
            sp3.innerHTML = '';

        }

    }
    if (tb4.value == 0) {
        tb4.style.borderColor = 'red';
        sp4.innerHTML = 'Please choose one department';
        sp4.style.color = 'red';
        c++;
    } else {
        tb4.style.borderColor = '';
        sp4.innerHTML = '';
    }

    if (tb5.value == '') {
        tb5.style.borderColor = 'red';
        sp5.innerHTML = 'Please enter user_id';
        sp5.style.color = 'red';
        c++;
    } else {
        tb5.style.borderColor = '';
        sp5.innerHTML = '';
    }
    if (tb6.value == '') {
        tb6.style.borderColor = 'red';
        sp6.innerHTML = 'Please enter password';
        sp6.style.color = 'red';
        c++;
    } else {
        tb6.style.borderColor = '';
        sp6.innerHTML = '';
    }
    if (tb7.value == '') {
        tb7.style.borderColor = 'red';
        sp7.innerHTML = 'Please confirm password';
        sp7.style.color = 'red';
        c++;
    } else {
        tb7.style.borderColor = '';
        sp7.innerHTML = '';
    }
    if (tb7.value != "" && tb6.value != "") {
        if (tb6.value != tb7.value) {
            tb7.style.borderColor = 'red';
            sp8.innerHTML = 'Password and confirm password does not match!!!';
            sp8.style.color = 'red';

            c++
        }
    }
    if (c != 0) {
        return false;
    } else {
        return true;
    }
}