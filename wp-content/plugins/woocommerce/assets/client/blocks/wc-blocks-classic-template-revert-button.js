(()=>{var e={144:()=>{}},t={};function o(r){var n=t[r];if(void 0!==n)return n.exports;var l=t[r]={exports:{}};return e[r](l,l.exports,o),l.exports}(()=>{"use strict";const e=window.React,t=window.wp.editSite,r=window.wp.data,n=window.wp.blocks,l=window.wp.components,c=window.wp.i18n,i=window.wp.element,s=window.wp.coreData,a=window.wp.blockEditor,d=window.wp.plugins;o(144);const u=e=>e.some((e=>"woocommerce/legacy-template"===e.name||u(e.innerBlocks))),p=()=>{var o,d;const{blocks:p,editedPostId:m}=(0,r.useSelect)((e=>({blocks:e(a.store).getBlocks(),editedPostId:e("core/edit-site").getEditedPostId()})),[]),{replaceBlocks:w}=(0,r.useDispatch)(a.store),g=(0,s.useEntityRecord)("postType","wp_template",m),v=(0,i.useMemo)((()=>u(p)),[p]),b=(0,i.useMemo)((()=>(e=>e.reduce(((e,t)=>"core/template-part"===t.name?e:[...e,t.clientId]),[]))(p)),[p]);return(0,e.createElement)(e.Fragment,null,!v&&(0,e.createElement)(t.PluginTemplateSettingPanel,null,(0,e.createElement)(l.PanelBody,{className:"wc-block-editor-revert-button-container"},(0,e.createElement)(l.Button,{variant:"secondary",onClick:()=>{var e;w(b,(0,n.createBlock)("core/group",{layout:{inherit:!0,type:"constrained"}},[(0,n.createBlock)("woocommerce/legacy-template",{template:null==g||null===(e=g.record)||void 0===e?void 0:e.slug})]))}},(0,c.__)("Revert to Classic Template","woocommerce")),(0,e.createElement)("span",null,(0,i.createInterpolateElement)((0,c.__)("The <strongText /> template doesn’t allow for reordering or customizing blocks, but might work better with your extensions.","woocommerce"),{strongText:(0,e.createElement)("strong",null,null!=g&&null!==(o=g.record)&&void 0!==o&&null!==(d=o.title)&&void 0!==d&&d.rendered?`${g.record.title.rendered} (Classic)`:"")})))))},m=["single-product","archive-product","product-search-results","taxonomy-product_cat","taxonomy-product_tag","taxonomy-product_attribute"],w="woocommerce-blocks-revert-button-templates";let g;(0,r.subscribe)((()=>{const e=g,o=(0,r.select)("core/edit-site");if(!(e=>{if(!(e=>null===e)(t=e)&&t instanceof Object&&t.constructor===Object){const t=e.getEditedPostType();return"wp_template"===t||"wp_template_part"===t}var t;return!1})(o))return;if(g=null==o?void 0:o.getEditedPostId(),e===g)return;const n=m.some((e=>{var t;return null===(t=g)||void 0===t?void 0:t.includes(e)})),l=void 0!==t.PluginTemplateSettingPanel;if(n&&l){if((0,d.getPlugin)(w))return;return(0,d.registerPlugin)(w,{render:p})}void 0!==(0,d.getPlugin)(w)&&(0,d.unregisterPlugin)(w)}),"core/edit-site")})()})();