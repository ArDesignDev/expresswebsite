jQuery(document).ready(function() {
  console.log('hello js');
  accordian();
});

function accordian() {
  if (self.innerWidth) {
    x = self.innerWidth;
  } else if (document.body) {
      x = 600;
  }

  jQuery('.accordian .accordian-q').on('click', function() {
    var answer = jQuery(this).next();
    var parentRow = jQuery(this).closest('.accordian-row');

    if (x > 601) { jQuery('.accordian-a').not(answer).slideUp(); }

    answer.slideToggle();

    if (x > 601) { jQuery('.accordian-row').not(parentRow).removeClass('accordian-row-arrow-active'); }
    parentRow.toggleClass('accordian-row-arrow-active');


  });
}