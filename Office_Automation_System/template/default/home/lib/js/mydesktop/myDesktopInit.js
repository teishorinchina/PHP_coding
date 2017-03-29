/*-----------------------------------------------------------
 *version: mydesktop 3.0
 *author: muzilei
 *email: 530624206@qq.com
 *blog: http://www.muzilei.com/
 *date:2013-1-24
 *桌面初始化脚本
 ----------------------------------------------------------*/
$(window).load(function(){
	      //停止进度条
		  myDesktop.stopProgress();
		  
		  //禁止选择文本内容
		  myDesktop.disableSelect();					   
		   
		  //初始化桌面背景
		  myDesktop.wallpaper.init("template/default/home/theme/default/images/wallpaper.jpg",1);
    
         //===========================初始化桌面=========================
 		 //桌面应用json数据 	  
		   var iconData={
			   "desktop1":[{
					   'iconSrc':'icon/icon8.png',  	  //图标路径   
					   'windowsId':'kuwoMusic',           //图标id
					   'windowTitle':'酷我音乐盒',          //图标名称
					   'iframSrc':'http://mbox.kuwo.cn/', //图标对应的窗口地址
					   'windowWidth':500,                 //窗口宽度
					   'windowHeight':500,                //窗口高度
					   'windowStatus':'maximized',        //窗口默认打开状态
					   'windowResizable':false,
					   'txNum':8                          //图标是否有消息数提示，没有就设为0
 						},
						{
					   'iconSrc':'icon/icon10.png', 	
					   'windowsId':'hudong', 
					   'windowTitle':'百科互动',
					   'iframSrc':'http://lab.hudong.com/webqq/index.html',
					   'windowWidth':600,
					   'windowHeight':600,
					   'windowStatus':'minimized',
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon7.png', 	
					   'windowsId':'dubianFim', 		
					   'windowTitle':'豆瓣FIM',
					   'iframSrc':'http://douban.fm/partner/qq_plus',
					   'windowWidth':400,
					   'windowHeight':400,
					   'txNum':0 
						},
						{
						'iconSrc':'icon/icon6.png', 	
					   'windowsId':'Pixlr', 	
					   'windowTitle':'Pixlr',
					   'iframSrc':'http://pixlr.com/editor/?loc=zh-cn',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon9.png', 	
					   'windowsId':'qidian', 	
					   'windowTitle':'起点中文',
					   'iframSrc':'http://webqq.qidian.com',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						},
						{
					   'iconSrc':'app_tools/bianqian/memo.png', 	
					   'windowsId':'memo', 	
					   'windowTitle':'便签',
					   'iframSrc':'app_tools/bianqian/index.html',
					   'windowWidth':162,
					   'windowHeight':200,
					   'top':20,
					   'left':'auto',
					   'right':260,
					   'isWidget':true
						}
						,
						{
					   'iconSrc':'icon/icon10.png', 	
					   'windowsId':'hudong1', 
					   'windowTitle':'百科互动',
					   'iframSrc':'http://lab.hudong.com/webqq/index.html',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon7.png', 	
					   'windowsId':'dubianFim1', 		
					   'windowTitle':'豆瓣FIM',
					   'iframSrc':'http://douban.fm/partner/qq_plus',
					   'windowWidth':400,
					   'windowHeight':400 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon6.png', 	
					   'windowsId':'Pixlr1', 	
					   'windowTitle':'Pixlr',
					   'iframSrc':'http://pixlr.com/editor/?loc=zh-cn',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon9.png', 	
					   'windowsId':'qidian1', 	
					   'windowTitle':'起点中文',
					   'iframSrc':'http://webqq.qidian.com',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						}
						
						,
						{
					   'iconSrc':'icon/icon10.png', 	
					   'windowsId':'hudong2', 
					   'windowTitle':'百科互动',
					   'iframSrc':'http://lab.hudong.com/webqq/index.html',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon7.png', 	
					   'windowsId':'dubianFim2', 		
					   'windowTitle':'豆瓣FIM',
					   'iframSrc':'http://douban.fm/partner/qq_plus',
					   'windowWidth':400,
					   'windowHeight':400 ,
					   'txNum':9
						},
						{
						'iconSrc':'icon/icon6.png', 	
					   'windowsId':'Pixlr2', 	
					   'windowTitle':'Pixlr',
					   'iframSrc':'http://pixlr.com/editor/?loc=zh-cn',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon9.png', 	
					   'windowsId':'qidian2', 	
					   'windowTitle':'起点中文',
					   'iframSrc':'http://webqq.qidian.com',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						}
						
						,
						{
					   'iconSrc':'icon/icon10.png', 	
					   'windowsId':'hudong3', 
					   'windowTitle':'百科互动',
					   'iframSrc':'http://lab.hudong.com/webqq/index.html',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':2
						},
						{
						'iconSrc':'icon/icon7.png', 	
					   'windowsId':'dubianFim3', 		
					   'windowTitle':'豆瓣FIM',
					   'iframSrc':'http://douban.fm/partner/qq_plus',
					   'windowWidth':400,
					   'windowHeight':400 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon6.png', 	
					   'windowsId':'Pixlr3', 	
					   'windowTitle':'Pixlr',
					   'iframSrc':'http://pixlr.com/editor/?loc=zh-cn',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon9.png', 	
					   'windowsId':'qidian3', 	
					   'windowTitle':'起点中文',
					   'iframSrc':'http://webqq.qidian.com',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						}
						
						,
						{
					   'iconSrc':'icon/icon10.png', 	
					   'windowsId':'hudon4g', 
					   'windowTitle':'百科互动',
					   'iframSrc':'http://lab.hudong.com/webqq/index.html',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':3
						},
						{
						'iconSrc':'icon/icon7.png', 	
					   'windowsId':'dubianFi4m', 		
					   'windowTitle':'豆瓣FIM',
					   'iframSrc':'http://douban.fm/partner/qq_plus',
					   'windowWidth':400,
					   'windowHeight':400 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon6.png', 	
					   'windowsId':'Pixlr4', 	
					   'windowTitle':'Pixlr',
					   'iframSrc':'http://pixlr.com/editor/?loc=zh-cn',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon9.png', 	
					   'windowsId':'qidian4', 	
					   'windowTitle':'起点中文',
					   'iframSrc':'http://webqq.qidian.com',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						}
						
						,
						{
					   'iconSrc':'icon/icon10.png', 	
					   'windowsId':'hudo5ng', 
					   'windowTitle':'百科互动',
					   'iframSrc':'http://lab.hudong.com/webqq/index.html',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':9
						},
						{
						'iconSrc':'icon/icon7.png', 	
					   'windowsId':'dubian5Fim', 		
					   'windowTitle':'豆瓣FIM',
					   'iframSrc':'http://douban.fm/partner/qq_plus',
					   'windowWidth':400,
					   'windowHeight':400 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon6.png', 	
					   'windowsId':'Pix5lr', 	
					   'windowTitle':'Pixlr',
					   'iframSrc':'http://pixlr.com/editor/?loc=zh-cn',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':7
						},
						{
						'iconSrc':'icon/icon9.png', 	
					   'windowsId':'qidia5n', 	
					   'windowTitle':'起点中文',
					   'iframSrc':'http://webqq.qidian.com',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						}
						
						,
						{
					   'iconSrc':'icon/icon10.png', 	
					   'windowsId':'hudo6ng', 
					   'windowTitle':'百科互动',
					   'iframSrc':'http://lab.hudong.com/webqq/index.html',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon7.png', 	
					   'windowsId':'dubia6nFim', 		
					   'windowTitle':'豆瓣FIM',
					   'iframSrc':'http://douban.fm/partner/qq_plus',
					   'windowWidth':400,
					   'windowHeight':400 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon6.png', 	
					   'windowsId':'Pixl6r', 	
					   'windowTitle':'Pixlr',
					   'iframSrc':'http://pixlr.com/editor/?loc=zh-cn',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon9.png', 	
					   'windowsId':'qidi6an', 	
					   'windowTitle':'起点中文',
					   'iframSrc':'http://webqq.qidian.com',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						}],
				"desktop2":[{
						'iconSrc':'icon/icon4.png', 	
					   'windowsId':'leshiwang',	
					   'windowTitle':'乐视网',
					   'iframSrc':'http://www.letv.com/cooperation/qq.html',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon5.png', 	
					   'windowsId':'qianqianMusic',		
					   'windowTitle':'千千音乐',
					   'iframSrc':'http://www.qianqian.com/paihang.html',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':23
						},
						{
						'iconSrc':'icon/icon13.png', 	
					   'windowsId':'zfmeishi',		
					   'windowTitle':'主妇美食',
					   'iframSrc':'http://www.zhms.cn/',
					   'windowWidth':600,
					   'windowHeight':500,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon12.png', 	
					   'windowsId':'mglv',		
					   'windowTitle':'芒果旅游',
					   'iframSrc':'http://www.mangocity.com/webqq/bookFlight.html',
					   'windowWidth':800,
					   'windowHeight':600,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon14.png', 	
					   'windowsId':'taobao',			
					   'windowTitle':'淘宝网',
					   'iframSrc':'http://marketing.taobao.com/home/webqq/index.htm',
					   'windowWidth':600,
					   'windowHeight':600,
					   'txNum':0
						}],
				"desktop3":[
						{
						'iconSrc':'icon/icon15.png', 	
					   'windowsId':'qingshu',		
					   'windowTitle':'情书',
					   'iframSrc':'http://www.qingshu8.net/',
					   'windowWidth':700,
					   'windowHeight':600,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon16.png', 	
					   'windowsId':'fenghuang',	
					   'windowTitle':'凤凰网',
					   'iframSrc':'http://www.ifeng.com/',
					   'windowWidth':800,
					   'windowHeight':750,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon17.png', 	
						'windowsId':'zgcun',	
					   'windowTitle':'中关村在线',
					   'iframSrc':'http://www.zol.com.cn/',
					   'windowWidth':800,
					   'windowHeight':600,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon18.png', 	
						'windowsId':'suhuqc',	
					   'windowTitle':'搜狐汽车',
					   'iframSrc':'http://auto.sohu.com/',
					   'windowWidth':600,
					   'windowHeight':600,
					   'txNum':0
						},
						{
						'iconSrc':'icon/icon19.png', 	
						'windowsId':'buddy',	
					   'windowTitle':'布丁电影票',
					   'iframSrc':'http://piao.buding.cn/',
					   'windowWidth':600,
					   'windowHeight':600,
					   'txNum':0
						}],
				"desktop4":[
						 {
						'iconSrc':'icon/icon8.png', 
						'windowsId':'jiaoxue',
						'windowTitle':'中国数学资源网',
					   'iframSrc':'http://www.mathrs.net/',
					   'windowWidth':800,
					   'windowHeight':600,
					   'txNum':5
						},
						{
						'iconSrc':'icon/icon20.png', 
						'windowsId':'huoying',
						'windowTitle':'火影忍者漫画动画',
					   'iframSrc':'http://www.manmankan.com/',
					   'windowWidth':600,
					   'windowHeight':450,
					   'txNum':0
						}],
				"desktop5":[
						 {
						'iconSrc':'icon/icon21.png', 
						'windowsId':'xxshuyuan',
						'windowTitle':'潇湘书院',
					   'iframSrc':'http://www.xxsy.net/',
					   'windowWidth':700,
					   'windowHeight':500,
					   'txNum':0
						}],
				"desktop6":[
						 ],
				"desktop7":[
						 ],
				"desktop8":[
						 ]
			   };

		   myDesktop.desktop.init(iconData,{
				arrangeType:1,  
				iconMarginLeft:45,
				iconMarginTop:25,
				defaultDesktop:3
				});
		   
		   //初始化任务栏
		   myDesktop.taskBar.init();
  		   
		   //===========================初始化侧边栏===================
           //侧边栏应用json数据
		   var defaultAppData=[
						{
						'iconSrc':'icon/icon1.png', 	
					   'windowsId':'myblog',	
					   'windowTitle':'我的博客',
					   'iframSrc':'http://www.muzilei.com/',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':0
					    },
						{
						'iconSrc':'icon/icon2.png', 	
					   'windowsId':'abus',
					   'windowTitle':'关于我',
					   'iframSrc':'http://www.muzilei.com/sample-page',
					   'windowWidth':600,
					   'windowHeight':750 ,
					   'txNum':0
					   },
					   {
						'iconSrc':'icon/icon3.png',    
					   'windowsId':'works',	   
					   'windowTitle':'作品',
					   'iframSrc':'http://www.muzilei.com/archives/category/works',
					   'windowWidth':600,
					   'windowHeight':750 ,
					   'txNum':0
					   },
					   {
					   'iconSrc':'icon/icon11.png', 	   
					   'windowsId':'ziyuan',   
					   'windowTitle':'资源分享',
					   'iframSrc':'ziyuan.html',
					   'windowWidth':600,
					   'windowHeight':600 ,
					   'txNum':25
					   }
					   ];
		   myDesktop.sildeBar.init(defaultAppData,"left");
           
            //全屏
             $("#showZm_btn").click(function(event){
                  event.preventDefault(); 
                  event.stopPropagation();

                  myDesktop.myWindow.init({
                               'iconSrc':'theme/default/images/skin.png',  	   
                               'windowsId':'showzm',   
                               'windowTitle':'全屏',
                               'iframSrc':'http://www.baidu.com',
                               'windowWidth':800,
                               'windowHeight':480,
                               'parentPanel':".currDesktop"
                                });
                  //添加到状态栏
                  if(!$("#taskTab_skins").size()){
                     myDesktop.taskBar.addTask("showzm","全屏","theme/default/images/skin.png");
                     }
                 });
           
           //设置主题
             $("#them_btn").click(function(event){
                  event.preventDefault(); 
                  event.stopPropagation();

                  myDesktop.myWindow.init({
                               'iconSrc':'theme/default/images/skin.png',  	   
                               'windowsId':'skins',   
                               'windowTitle':'主题设置',
                               'iframSrc':'app_tools/skins/index.html',
                               'windowWidth':500,
                               'windowHeight':380,
                               'parentPanel':".currDesktop"
                                });
                  //添加到状态栏
                  if(!$("#taskTab_skins").size()){
                     myDesktop.taskBar.addTask("skins","主题设置","theme/default/images/skin.png");
                     }
                 });
 		   
		  //===========================初始化开始菜单=================
		  myDesktop.startBtn.init([
					 [{
					windowsId:"zdxs",   
					windowTitle:"终端销售",
					iconSrc:"icon/item1.png",
					childItem:[
								 [{
									windowsId:"zdzb",  
									windowTitle:"终端指标",
									iconSrc:"icon/item1.png",
									childItem:[[{
										   'iconSrc':'icon/icon4.png', 	
										   'windowsId':'leshiwang',	
										   'windowTitle':'乐视网',
										   'iframSrc':'http://www.letv.com/cooperation/qq.html'
										   	 }]]
									},{
								  windowsId:"22", 
								  windowTitle:"终端分析",
								  iconSrc:"icon/item3.png",
								  iframSrc:'ziyuan.html'
								  },{
								  windowsId:"33", 
								  windowTitle:"终端营销目标发现",
								  iconSrc:"icon/item3.png",
								  iframSrc:'ziyuan.html'
								  },{
								  windowsId:"44", 
								  windowTitle:"终端精准营销",
								  iconSrc:"icon/item3.png",
								  iframSrc:'ziyuan.html'
								  },{
								  windowsId:"55", 
								  windowTitle:"终端营销监控",
								  iconSrc:"icon/item3.png",
								  iframSrc:'ziyuan.html'
								  },{
								  windowsId:"66", 
								  windowTitle:"终端营销评估",
								  iconSrc:"icon/item3.png",
								  iframSrc:'ziyuan.html'
								  },{
								  windowsId:"77", 
								  windowTitle:"终端营销反馈",
								  iconSrc:"icon/item3.png",
								  iframSrc:'ziyuan.html'
								  }]
						 ]
					  },{
					windowsId:"111", 	  
					windowTitle:"套餐进阶",
					iconSrc:"icon/item2.png",
 					iframSrc:'ziyuan.html'
						  },{
					windowsId:"222", 	  
					windowTitle:"应用推荐",
					iconSrc:"icon/item2.png",
					iframSrc:'ziyuan.html'
						  },{
					windowsId:"333", 	  
					windowTitle:"内容推荐",
					iconSrc:"icon/item2.png",
					iframSrc:'ziyuan.html'
						  },{
					windowsId:"444", 	  
					windowTitle:"四网协同",
					iconSrc:"icon/item2.png",
					iframSrc:'ziyuan.html'
						  },{
					windowsId:"555", 	  
					windowTitle:"自有产品营销",
					iconSrc:"icon/item2.png",
					iframSrc:'ziyuan.html'
						  }]
  					]);
 		
		//====================初始化桌面右键菜单==============
		var data=[
					[{
					text:"显示桌面",
					func:function(){
						$("div.myWindow").not(".hideWin")
						.each(function(){
								$(this).find(".winMinBtn").trigger("click");									   
 								});
						}
						}]
					,[{
					text:"系统设置",
					func:function(){
                       //调用弹出窗口    
                       myDesktop.myWindow.init({
                            windowsId:"555", 	  
                            windowTitle:"系统设置",
                            iconSrc:"icon/item2.png",
                            windowWidth:500,
                            windowHeight:360,
                            iframSrc:'sys.html',
                            parentPanel:'div.currDesktop'
						  });
                    }
					  },{
					text:"主题设置",
					func:function(){}
						  }]
					,[{
					  text:"退出系统",
					  func:function(){} 
					  }]
					,[{
					  text:"关于muzilei",
					  func:function(){
						  location.href="http://www.muzilei.com/";
						  } 
					  }]
					];
		 myDesktop.contextMenu($(document.body),data,"body",10);
		 
});