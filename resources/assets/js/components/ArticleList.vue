<template>
    <!--左边文章列表-->
    <div class="blog-main-left" v-if="total" v-infinite-scroll="loadMore" infinite-scroll-disabled="busy" infinite-scroll-distance="10">
        <div class="article shadow" v-for="item in items">
            <div class="article-left">
                <img src="" alt="基于laypage的layui扩展模块（pagesize.js）！" />
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
   </div>
</template>

<script>
    export default {
        data(){
            return {
                items : [],
                total : 0,
                currentPage: 1,
                busy: false
            }
        },
        created(){
            let self = this
            $(window).scroll(function(){
                let scrollTop = $(this).scrollTop()
                let scrollHeight = $(document).height()
                let windowHeight = $(this).height()
                if(scrollTop + windowHeight === scrollHeight){
                    self.getList(self.currentPage+1)
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
                    console.log(self.items)
                    self.items = tmp.data

                    self.total = tmp.total
                    self.currentPage = tmp.current_page
                    console.log(self.items)
                })
            },
            loadMore: function() {
                this.getList(this);
            }
        }


    }
</script>
