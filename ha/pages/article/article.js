// pages/article/article.js
var list,id
Page({
  data:{},
  onLoad:function(options){
   var that = this
   id=options.dataid 
   
    
     wx.request({
       url: 'https://ehfj7swk.qcloud.la/list6.php', 
      data: {
        id: id       
      },
      header: {
        'content-type': 'application/x-www-form-urlencoded'
      },
      success: function (res) {
      list=res.data
     that.setData({
              article: res.data
            })
          }
        })
      },
     // 分享页面
onShareAppMessage: function () {
    return {
      title: list.title,
      desc: list.content,
      path: '/article/article?dataid='+id
    }
  }
  
})