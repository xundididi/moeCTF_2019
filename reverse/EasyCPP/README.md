> 因为我换硬盘了，数据没备份，所以最新版的源代码没了，我存了大概2、3个版本以前的源代码，其实改动也不大，就是加了一些乱七八糟的混淆之类的，主要加密逻辑还是没变

大概步骤如下：

1. 扫一下，发现是32位程序，拖进对应ida
2. 摁shift+F12找到关键字符串，交叉引用
3. 定位到关键函数后F5，再进行分析
4. 大概的逻辑就是base64+Caesar