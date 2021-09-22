let index = document.querySelectorAll('li');
let row = document.querySelectorAll('tr');
let count = 1;
display(count);
index[count].classList.add('active');
end();
for (let i = 0; i < index.length; i++) {
    index[i].addEventListener('click', () => {
        if (i == 0) {
            if (count > 1) {
                index[count].classList.remove('active');
                index[count - 1].classList.add('active');
                count--;
                display(count);
                end();
            }
        }
        else if (i + 1 == index.length) {
            if (count < ((row.length) - 2) / 3) {
                index[count].classList.remove('active');
                index[count + 1].classList.add('active');
                count++;
                display(count);
                end();
            }
        }
        else {
            index[count].classList.remove('active');
            index[i].classList.add('active');
            count = i;
            display(count);
            end();
        }
    })
}
function end() {
    if (count == 1)
        index[0].classList.add('disabled');
    else
        index[0].classList.remove('disabled');
    if (count >= ((row.length) - 2) / 3)
        index[index.length - 1].classList.add('disabled');
    else
        index[index.length - 1].classList.remove('disabled');
}
function display(x) {
    for (let j = 2; j < row.length; j++)
        row[j].style.display = "none";
    for (let k = 3*x - 1; k < row.length && k<3*x+2; k++)
    row[k].style.display = "";
}