$("#accordion").on("hide.bs.collapse show.bs.collapse", function (e) {
    $(e.target)
        .prev()
        .find("i:last-child")
        .toggleClass("fa-minus fa-plus");
});
