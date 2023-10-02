<!-- 在页面中添加一个Toast -->
<!-- <div class="toast position-fixed bottom-0 start-0 m-3 zindex-100" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
<div class="toast-header">
    <img src="/icon.png" class="rounded me-2" alt="" style="width:14px;height:14px">
    <strong class="me-auto">您有一条新的消息</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</div>
<div class="toast-body">
    我们想让您知道，<br>
    CARP will always Stand With <span class="badge bg-primary">UKRAI</span><span class="badge bg-warning">NIANS</span>
</div>
</div> -->
<?php 
$rs = $conn->query("SELECT * FROM news ORDER BY date DESC LIMIT 1");
while($r = $rs->fetch_assoc()){
?>
<div class="toast position-fixed bottom-0 start-0 m-3 zindex-100" role="alert" aria-live="assertive" aria-atomic="true">
<div class="toast-header">
    <img src="/icon.png" class="rounded me-2" alt="" style="width:14px;height:14px">
    <strong class="me-auto"><?php echo $r['title'] ?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</div>
<div class="toast-body">
    <?php echo $r['subtitle'] ?>
</div>
</div>
<?php } ?>

<script>
    $(document).ready(function(){
    var toastElList = [].slice.call(document.querySelectorAll('.toast'));
    var toastList = toastElList.map(function (toastEl) {
        return new bootstrap.Toast(toastEl);
    });
    toastList.forEach(toast => toast.show());
    });
</script>