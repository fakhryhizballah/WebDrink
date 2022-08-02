console.log("homeblog.js");
// fectch data
// fetch("AjaxBlog/getList")
//     .then(response => response.json())
//     .then(data => {
//         console.log(data);
//         // create html
//     }
//     );
//# sourceMappingURL=homeblog.js.map
// .catch(error => console.log(error));
//# sourceMappingURL=homeblog.js.map

// fetch('/AjaxBlog/getList')
//     .then((response) => response.json())
//     .then((data) => console.log(data.data)
//         // create html
//         //   var app = document.getElementById("app");
//         // return data.data;
//     );

async function getList() {
    const response = await fetch('/AjaxBlog/getList');
    const data = await response.json();
    console.log(data.data);
    // create html
    //   var app = document.getElementById("app");
    return data.data;
}

async function list() {
    var app = document.getElementById("app");
    var data = await getList();
    function createDivNode(item, index) {
        console.log(item.id_blog);
        var div = document.createElement("div");
        // div.className = "col-md-4";
        div.className = "row mb-4";
        //     div.innerHTML = `
        //     <img src="${item.thumbnail}" class="card-img-top" alt="${item.judul}">
        //     <div class="card-body">
        //     <h5 class="card-title">${item.judul}</h5>
        //     <p class="card-text">${item.des}</p>
        //     <a href="detail/${item.slug}" class="btn btn-primary">View Project</a>
        // </div>`;
        div.innerHTML = `
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="${item.thumbnail}" alt="${item.judul}">
            </a>
        </div>
        <div class="col-md-5">
            <h3>${item.judul}</h3>
            <p>${item.des}</p>
            <a class="btn btn-primary" href="detail/${item.slug}">View Project</a>
        </div>
    `;
        return div;
    }
    var divs = data.map(createDivNode);
    divs.forEach(function (item) {
        app.appendChild(item);
    }
        // data.forEach(createDivNode);
    );



}
list();
// getList();
