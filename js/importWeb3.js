async function connectMetamask() {
  if (typeof window.ethereum !== 'undefined') {
    // 请求用户授权连接本站
    await window.ethereum.request({ method: 'eth_requestAccounts' });
    // 连接成功
    alert('Metamask 已连接到本站');
  };
};

document.getElementById("async-btn").addEventListener('click', connectMetamask);

// 检查 Metamask 是否已连接到本站
async function checkMetamaskConnection() {
  // 检测 Metamask 插件是否存在
  if (typeof window.ethereum !== 'undefined') {
    try {
      // 在这里可以执行其他操作，如调用合约或发送交易
      web3.eth.getAccounts(function(error, accounts) {
        if (error) {
          console.log(error);
        } else {
          var minAddress = accounts.toString();
          let maxLength = 10;  // 定义最大显示长度
          if (minAddress.length > maxLength) {
            var start = minAddress.substr(0, maxLength/2);
            var end = minAddress.substr(minAddress.length - maxLength/2);
            minAddress = start + '......' + end;
            //document.getElementById("account").innerHTML="账号: "+minAddress;
            //document.getElementById("account-in-profile").innerHTML=minAddress;
          };
          //xhr检测nickname value
          console.log(accountAddress);
          var xhr = new XMLHttpRequest();
          var url = "php/getUser.php";
          xhr.open("POST", url, true);
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
              var response = xhr.responseText;
              console.log(response);
              let data = response.replace(/[\[\]"]/g, '');
              document.getElementById("profile-name").innerHTML=data;
            }
          };
          xhr.send("account=" + encodeURIComponent(accountAddress));
        }
      }
      );
    }
    catch (error) {
      // 用户拒绝连接或其他错误
      console.log('Metamask 连接被拒绝或发生错误:', error);
    }
  };
};

// 在页面加载完成后调用检查函数
window.addEventListener("load", checkMetamaskConnection);

//XmlHttpRequest
if (typeof web3 !== 'undefined') {
  web3 = new Web3(web3.currentProvider);
} else {
    console.log("请安装 MetaMask");
};
var accountAddress = web3.eth.accounts;
var address = accountAddress;

//
var xhr = new XMLHttpRequest();
xhr.open('POST', 'php/insertWebjs.php', true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("Address="+address);

//
web3.eth.getBalance(accounts[0], function(error, balance) {
  if (error) {
    console.log(error);
}
})

const balanceETH = balance.e;

document.getElementById("balance-amount").innerHTML=balanceETH;

xhr.open('POST', 'php/insertWebjs.php', true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("Balance="+balanceETH);