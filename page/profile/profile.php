<!--档案模态框-->
<div class="modal fade" id="profile-modal">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
<div class="modal-content">
<div class="modal-header"><h5 class="modal-title">我的档案</h5></div>
<div class="modal-body">

<div class="container d-flex justify-content-center mt-5">
    <div class="card">
    <div class="top-container">
        <img src="<?php echo $avatarUrl ?>" class="img-fluid profile-image" width="70" alt="profile">
        <div class="p-3">
        <h5 class="name" id="profile-name">你好,</h5>
        <p class="name"><?php echo $nickname?></p>
        </div>
    </div>    
    <div class="middle-container d-flex justify-content-between align-items-center mt-3 p-2">
        <div class="dollar-div px-3">
            <div class="round-div"><i class="fa fa-dollar dollar"></i></div>
        </div>
        <div class="d-flex flex-column text-right" style="margin-right: 1rem;">
            <span class="current-balance">钱包余额</span>
            <div class="d-flex flex-wrap"><span class="amount">ETH:&nbsp</span><span class="amount" id="balance-amount">0</span></div>
        </div>
    </div>
    <div class="account-info mt-4">
        <span class="account-info" id="account-in-profile"><?php echo $account?></span>
    </div>
    </div>
</div>

</div>

<div class="modal-footer">
    <button class="btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#profile-modal">关闭</button>
</div>

</div>
</div>
</div>