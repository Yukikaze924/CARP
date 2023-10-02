$(document).ready(function() {
    // 监听页面点击事件
    $(document).click(function(event) {
      if ($(event.target).closest("#sidebar").length === 0 && !$(event.target).is("[data-bs-toggle='collapse show']")) {
        // 判断点击的不是sidebar本身，且不是data-bs-toggle为collapse的元素，即点击了空白区域
        $("#sidebar").collapse("hide");
      }
    });
  });