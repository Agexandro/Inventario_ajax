class Ajax {
    fillTable(url) {
        var xmlhttp = new XMLHttpRequest()
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText)
                let makeTable = new MakeTable
                makeTable.make(data)

            }
        }
        xmlhttp.open("GET", url)
        xmlhttp.send()
    }
}

class MakeTable {
    make(data){
    let tbody = document.createElement("tbody")
    let c = 0;
        data.forEach(element => {
            let tr = document.createElement("tr")
            let td = document.createElement("td")
            td.textContent = ++c
            tr.appendChild(td)
            //
            tr.onclick = function () {
                document.getElementById("hidden").value = element[2]
                document.getElementById("mod").style.display = "block"
            }
            //
            element.forEach(item => {
                let td = document.createElement("td")
                td.textContent = item
                tr.appendChild(td)
            })
            tbody.appendChild(tr)
            document.getElementsByTagName("tbody")[0].replaceWith(tbody)
        });
    }
}