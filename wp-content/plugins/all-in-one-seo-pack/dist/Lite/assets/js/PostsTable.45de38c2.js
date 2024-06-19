import{D as S,e as C,A as T,d as v}from"./links.da3be5e7.js";import{n as P}from"./numbers.c7cb4085.js";import{r as p,o as n,c as d,d as u,z as a,f,w as r,a as c,g as F,D as h,b as _}from"./vue.runtime.esm-bundler.c297bd08.js";import{_ as y}from"./_plugin-vue_export-helper.8a32e791.js";import"./index.6d5de07f.js";import{C as A}from"./Index.7d0ce25e.js";import"./default-i18n.3881921e.js";import"./constants.44daa6bb.js";import"./TruSeoHighlighter.271256b4.js";/* empty css                                              */import{W as O}from"./WpTable.fc4a987b.js";import{P as D}from"./PostTypes.797a4244.js";import{V as U,S as B,T as I,c as L}from"./Statistic.d05b471f.js";import{C as V}from"./ScoreButton.fc745d57.js";import{C as N}from"./Table.a0011880.js";const j={components:{apexchart:U},props:{points:{type:Object,required:!0},peak:{type:Number,default(){return 0}},recovering:{type:Boolean,default(){return!1}},height:{type:Number,default(){return 50}}},data(){return{strings:{recovering:this.$t.__("Slowly Recovering",this.$td),peak:this.$t.__("Peak",this.$td)}}},computed:{getSeries(){const t=this.points,o=[];return Object.keys(t).forEach(s=>{o.push({x:s,y:t[s]})}),[{data:o}]},chartOptions(){const t=this.peak;return{colors:[function({value:o}){return o===t?"#005AE0":"#99C2FF"}],chart:{type:"bar",sparkline:{enabled:!0},zoom:{enabled:!1},toolbar:{show:!1},parentHeightOffset:0,background:"#fff"},grid:{show:!1,padding:{top:2,right:2,bottom:0,left:2}},plotOptions:{bar:{columnWidth:"85%",barHeight:"100%"}},fill:{type:"solid"},tooltip:{enabled:!0,x:{show:!0,formatter:o=>S.fromFormat(o,"yyyy-MM").setZone(S.zone).toLocaleString({month:"long",year:"numeric"})},y:{formatter:o=>{const s=this.$t.sprintf(this.$t.__("%1$s points",this.$td),P.numberFormat(o,0));let l="";return o===t&&(l=`<span class="peak">${this.strings.peak}</span>`),s+l}},marker:{show:!1}}}}}},H={class:"aioseo-graph-decay"},M={key:0,class:"aioseo-graph-decay-recovering"};function W(t,o,s,l,i,g){const b=p("apexchart");return n(),d("div",H,[u(b,{width:"100%",height:s.height,ref:"apexchart",options:g.chartOptions,series:g.getSeries,class:"aioseo-graph-decay-chart"},null,8,["height","options","series"]),s.recovering?(n(),d("div",M,a(i.strings.recovering),1)):f("",!0)])}const E=y(j,[["render",W]]),z={};function R(t,o){return n(),d("div")}const Z=y(z,[["render",R]]);const G={setup(){return{licenseStore:C(),searchStatisticsStore:T(),settingsStore:v()}},components:{CoreScoreButton:V,CoreWpTable:N,Cta:A,GraphDecay:E,PostActions:Z,Statistic:B},mixins:[D,O,I],data(){return{numbers:P,tableId:"aioseo-search-statistics-post-table",changeItemsPerPageSlug:"searchStatisticsSeoStatistics",showUpsell:!1,sortableColumns:[],strings:{position:this.$t.__("Position",this.$td),ctaButtonText:this.$t.__("Unlock Post Tracking",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Post Tracking is a %1$s Feature",this.$td),"PRO")}}},props:{posts:Object,isLoading:Boolean,showHeader:{type:Boolean,default(){return!0}},showTableFooter:Boolean,showItemsPerPage:Boolean,columns:{type:Array,default(){return["postTitle","seoScore","clicks","impressions","position"]}},appendColumns:{type:Object,default(){return{}}},defaultSorting:{type:Object,default(){return{}}},initialFilter:{type:String,default(){return""}},updateAction:{type:String,default(){return"updateSeoStatistics"}}},computed:{allColumns(){var s,l;const t=L(this.columns),o=((l=(s=this.posts)==null?void 0:s.filters)==null?void 0:l.find(i=>i.active))||{};return this.appendColumns[o.slug||"all"]&&t.push(this.appendColumns[o.slug||"all"]),t.map(i=>(i.endsWith("Sortable")&&(i=i.replace("Sortable",""),this.sortableColumns.push(i)),i))},tableColumns(){return[{slug:"row",label:"#",width:"40px"},{slug:"postTitle",label:this.$t.__("Title",this.$td),width:"100%"},{slug:"seoScore",label:this.$t.__("TruSEO Score",this.$td),width:"130px"},{slug:"clicks",label:this.$t.__("Clicks",this.$td),width:"80px"},{slug:"impressions",label:this.$t.__("Impressions",this.$td),width:"110px"},{slug:"position",label:this.$t.__("Position",this.$td),width:"90px"},{slug:"lastUpdated",label:this.$t.__("Last Updated On",this.$td),width:"160px"},{slug:"decay",label:this.$t.__("Loss",this.$td),width:"140px"},{slug:"decayPercent",label:this.$t.__("Drop (%)",this.$td),width:"120px"},{slug:"performance",label:this.$t.__("Performance Score",this.$td),width:"150px"},{slug:"diffDecay",label:this.$t.__("Diff",this.$td),width:"95px"},{slug:"diffPosition",label:this.$t.__("Diff",this.$td),width:"80px"}].filter(t=>this.allColumns.includes(t.slug)).map(t=>(t.sortable=this.isSortable&&this.sortableColumns.includes(t.slug),t.sortable&&(t.sortDir=t.slug===this.orderBy?this.orderDir:"asc",t.sorted=t.slug===this.orderBy),t))},isSortable(){return this.filter==="all"&&this.$isPro&&!this.licenseStore.isUnlicensed}},methods:{resetSelectedFilters(){this.selectedFilters.postType="",this.processAdditionaFilterOptionSelected({name:"postType",selectedValue:""})},fetchData(t){if(typeof this.searchStatisticsStore[this.updateAction]=="function")return this.searchStatisticsStore[this.updateAction](t)}},mounted(){this.initialFilter&&this.processFilter({slug:this.initialFilter})}},q={class:"aioseo-search-statistics-post-table"},J={class:"post-row"},K={class:"post-title"},Q=["onClick"],X={key:1,class:"post-title"},Y={key:0,class:"row-actions"},tt=["href"],et=["href"];function st(t,o,s,l,i,g){const b=p("post-actions"),k=p("core-score-button"),m=p("statistic"),w=p("graph-decay"),$=p("cta"),x=p("core-wp-table");return n(),d("div",q,[u(x,{ref:"table",class:"posts-table",id:i.tableId,columns:g.tableColumns,rows:Object.values(s.posts.rows),totals:s.posts.totals,filters:s.posts.filters,"additional-filters":s.posts.additionalFilters,"selected-filters":t.selectedFilters,loading:s.isLoading||l.searchStatisticsStore.loading.seoStatistics,"initial-page-number":t.pageNumber,"initial-search-term":t.searchTerm,"initial-items-per-page":l.settingsStore.settings.tablePagination[i.changeItemsPerPageSlug],"show-header":s.showHeader,"show-bulk-actions":!1,"show-table-footer":s.showTableFooter,"show-items-per-page":s.showItemsPerPage,"show-pagination":"","blur-rows":i.showUpsell,onFilterTable:t.processFilter,onProcessAdditionalFilters:t.processAdditionalFilters,onAdditionalFilterOptionSelected:t.processAdditionaFilterOptionSelected,onPaginate:t.processPagination,onProcessChangeItemsPerPage:t.processChangeItemsPerPage,onSearch:t.processSearch,onSortColumn:t.processSort},{row:r(({index:e})=>[c("div",J,a(e+1),1)]),postTitle:r(({row:e})=>[c("div",K,[e.postId?(n(),d("a",{key:0,href:"#",onClick:F(it=>t.openPostDetail(e),["prevent"])},a(e.postTitle),9,Q)):(n(),d("span",X,a(e.postTitle),1))]),u(b,{row:e},null,8,["row"]),e.postId?(n(),d("div",Y,[c("span",null,[c("a",{class:"view",href:e.context.permalink,target:"_blank"},[c("span",null,a(t.viewPost(e.context.postType.singular)),1)],8,tt),h(" | ")]),c("span",null,[c("a",{class:"edit",href:e.context.editLink,target:"_blank"},[c("span",null,a(t.editPost(e.context.postType.singular)),1)],8,et)])])):f("",!0)]),seoScore:r(({row:e})=>[e.seoScore?(n(),_(k,{key:0,class:"table-score-button",score:e.seoScore},null,8,["score"])):f("",!0)]),clicks:r(({row:e})=>[h(a(i.numbers.compactNumber(e.clicks)),1)]),impressions:r(({row:e})=>[h(a(i.numbers.compactNumber(e.impressions)),1)]),position:r(({row:e})=>[h(a(Math.round(e.position).toFixed(0)),1)]),lastUpdated:r(({row:e})=>[h(a(e.context.lastUpdated||"-"),1)]),decay:r(({row:e})=>[u(m,{type:"decay","show-difference":!1,total:e.decay,showZeroValues:!0,class:"no-margin"},null,8,["total"])]),decayPercent:r(({row:e})=>[u(m,{type:"decayPercent","show-difference":!1,total:e.decayPercent,showZeroValues:!0,class:"no-margin"},null,8,["total"])]),performance:r(({row:e})=>[u(w,{points:e.points,peak:e.peak,recovering:e.recovering,height:38},null,8,["points","peak","recovering"])]),diffPosition:r(({row:e})=>[e.difference.comparison?(n(),_(m,{key:0,type:"position","show-original":!1,difference:e.difference.position,"tooltip-offset":"-100px,0"},null,8,["difference"])):f("",!0)]),diffDecay:r(({row:e})=>[e.difference.comparison?(n(),_(m,{key:0,type:"diffDecay","show-original":!1,difference:e.difference.decay,"tooltip-offset":"-100px,0"},null,8,["difference"])):f("",!0)]),cta:r(()=>[i.showUpsell?(n(),_($,{key:0,"cta-link":t.$links.getPricingUrl("search-statistics","search-statistics-upsell"),"button-text":i.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("search-statistics","search-statistics-upsell",t.$isPro?"pricing":"liteUpgrade"),"hide-bonus":!l.licenseStore.isUnlicensed},{"header-text":r(()=>[h(a(i.strings.ctaHeader),1)]),_:1},8,["cta-link","button-text","learn-more-link","hide-bonus"])):f("",!0)]),_:1},8,["id","columns","rows","totals","filters","additional-filters","selected-filters","loading","initial-page-number","initial-search-term","initial-items-per-page","show-header","show-table-footer","show-items-per-page","blur-rows","onFilterTable","onProcessAdditionalFilters","onAdditionalFilterOptionSelected","onPaginate","onProcessChangeItemsPerPage","onSearch","onSortColumn"])])}const yt=y(G,[["render",st]]);export{yt as P};
