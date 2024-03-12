let st = 0;
function initCode() {
    let bt = document.createElement("button");
    bt.innerHTML = "Show Button";
    bt.style.background = "Green";
    bt.style.color = "white";
    bt.style.padding = "8px";
    bt.style.textAlign = "center";
    bt.style.width = "100px";
    bt.style.border = "0px";
    bt.style.borderRadius = "6px";
    bt.style.display = "block";
    bt.style.marginTop = "12px";
    bt.addEventListener("click", function () {
        code_print();
    });
    bt.id = "print_but";
    document.body.appendChild(bt);
}
function code_print() {
    if (st != 1) {
        st = 1;
        let c = document.body.innerHTML;
        let d = document.createElement("div");
        d.id = "code_print";
        d.style.textAlign="left";
        d.style.border = "1px solid #fff";
        d.style.borderRadius = "5px";
        d.style.fontFamily = "'Courier New', Courier, monospace";
        d.innerText = c;
    
        document.body.appendChild(d);
        document.getElementById("print_but").innerHTML = "Hide code";
    }
    else {
        st = 0;
        let r = document.getElementById("code_print");
        document.body.removeChild(r);
        document.getElementById("print_but").innerHTML = "Show Code";
    }
}
