console.log("homeblog.js");

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
        div.className = "row mb-4";
        div.innerHTML = `
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="${item.thumbnail}" alt="${item.judul}">
            </a>
        </div>
        <div class="col-md-5">
            <h2>${item.judul}</h2>
            <p class="lh-sm text-break">${item.des}</p>
            <a class="btn btn-primary" href="blog/${item.slug}">View Project</a>
        </div>
    `;
        return div;
    }
    var divs = data.map(createDivNode);
    divs.forEach(function (item) {
        app.appendChild(item);
    }
    );



}
list();
// getList();
