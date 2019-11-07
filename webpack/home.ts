declare var $: any;
export function homeModule() {
  'use strict';

  $("#mainFormfile877").find('input').change(function (e: any) {
    let path:string = e.target.value;
    path = path.replace('C:', "").replace('fakepath', "").replace(/\\/g, "");
    $("#mainFormfile877").find('div').text(path);
  });
}
