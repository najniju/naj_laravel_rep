function myFn() {


    tb1 = document.getElementById('department_name');
    sp1 = document.getElementById('sp1');
    c = 0;
    if (tb1.value == '') {
        tb1.style.borderColor = 'red';
        sp1.innerHTML = 'Please enter department name';
        sp1.style.color = 'red';
        c++;
    } else {
        tb1.style.borderColor = '';
        sp1.innerHTML = '';
    }
    if (c != 0) {
        return false;
    } else {
        return true;
    }
}