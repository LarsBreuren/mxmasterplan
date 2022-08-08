

jQuery(document).ready(function($) {
  const colorsceme  = [ //Order followed for charts
    "#2b2e38",
    "#6c6f78",
    "#E25E0E",
    "#c9d0d4",
  ];
  let colorCount = 0;
  let totalCount = 0;
  let currentPie = 0;
  function sliceSize(dataNum, dataTotal) {
      return (dataNum / dataTotal) * 360;
    }
    
    function addSlice(id, sliceSize, pieElement, offset, sliceID, color) {
      $(pieElement).append("<div class='slice "+ sliceID + "'><span></span></div>");
      var offset = offset - 1;
      var sizeRotation = -179 + sliceSize;
    
      $(id + " ." + sliceID).css({
        "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
      });
    
      $(id + " ." + sliceID + " span").css({
        "transform"       : "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
        "background-color": color
      });
    }
    
    function iterateSlices(id, sliceSize, pieElement, offset, dataCount, sliceCount, color) {
      var
        maxSize = 179,
        sliceID = "s" + dataCount + "-" + sliceCount;
    
      if( sliceSize <= maxSize ) {
        addSlice(id, sliceSize, pieElement, offset, sliceID, color);
      } else {
        addSlice(id, maxSize, pieElement, offset, sliceID, color);
        iterateSlices(id, sliceSize-maxSize, pieElement, offset+maxSize, dataCount, sliceCount+1, color);
      }
    }
    
    function createPie(id) {
      var
        listData      = [],
        listTotal     = 0,
        offset        = 0,
        i             = 0,
        pieElement    = id + " .pie-chart__pie"
        dataElement   = id + " .pie-chart__legend"
    
        color         = [
          "#2b2e38",
          "#00999d",
          "#c9d0d4",
        ];
    
      $(dataElement+" span").each(function() {
        listData.push(Number($(this).html()));
        totalCount += Number($(this).html());
      });
    
      for(i = 0; i < listData.length; i++) {
        listTotal += listData[i];
      }
    
      for(i=0; i < listData.length; i++) {
        var size = sliceSize(listData[i], listTotal);
        iterateSlices(id, size, pieElement, offset, i, 0, colorsceme[colorCount]);
        $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", colorsceme[colorCount]);
        offset += size;
        colorCount++
      }
      $('#total'+currentPie ).html(totalCount); //Fill id's with total amount of pie, use currentPie to assign number to id
      
      colorCount = 0;
      totalCount = 0; //Reset counts for new pie chart
      currentPie++ 
    }
    
    function createPieCharts() {
      createPie('.pieID--micro-skills' );
      createPie('.pieID--categories' );
      createPie('.pieID--operations' );
    }
    
    createPieCharts();
});