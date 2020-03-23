function myFn() {

    tb1 = document.getElementById('student_name');
    tb2 = document.getElementById('student_place');
    tb3 = document.getElementById('student_contact');
    sp1 = document.getElementById('sp1');
    sp2 = document.getElementById('sp2');
    sp3 = document.getElementById('sp3');
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
    if (c != 0) {
        return false;
    } else {
        return true;
    }
}