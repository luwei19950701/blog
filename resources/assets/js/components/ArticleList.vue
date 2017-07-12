<template>
    <!--左边文章列表-->
    <div class="blog-main-left" v-if="total">
        <div class="article shadow" v-for="item in items">
            <div class="article-left">
                <img :src="item.imgs[0]?item.imgs[0].img_url:'/uploads/imgs/2.jpg'" :alt="item.title" />
            </div>
            <div class="article-right">
                <div class="article-title">
                    <a href="detail.html">{{item.title}}</a>
                </div>
                <div class="article-abstract">
                    {{item.description}}
                </div>
            </div>
            <div class="clear"></div>
            <div class="article-footer">
                <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{item.created_at}}</span>
                <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                <span v-for="tag in item.tags">
                <i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="">{{tag.name}}</a>
                </span>
                <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;{{item.views}}</span>
                <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;{{item.comments_count}}</span>
            </div>
        </div>
        <div class="layui-flow-more" v-show="more">没有更多了</div>
   </div>
</template>

<script>
    export default {
        data(){
            return {
                items : [],
                total : 0,
                more : false,
                currentPage: 1,
                countPage: 10
            }
        },
        created(){
            let self = this
            $(window).scroll(function(){
                let scrollTop = $(this).scrollTop()
                let scrollHeight = $(document).height()
                let windowHeight = $(this).height()
                if(scrollTop + windowHeight === scrollHeight){
                    if(parseInt(self.countPage) > parseInt(self.currentPage)){
                        self.getList(self.currentPage+1)
                    }else{
                        self.more = 'ok'
                    }
                }
            })
        },
        mounted() {
            this.getList(this.currentPage)
        },
        methods: {
            getList: function(p){
                let self = this
                let prm = {page:p}
                axios.get('/api/article', {
                    params: prm
                }).then(function(response){
                    let tmp = response.data
                    self.items.push.apply(self.items, tmp.data)
                    self.total = tmp.total
                    self.currentPage = tmp.current_page
                    self.countPage = tmp.last_page
                    console.log(tmp.data[0])
                })
            }
        }


    }
</script>
