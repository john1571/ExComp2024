# ExComp2024
Laravel-based Web application for tracking and scoring stats during a family exercise competition.

Rule Changes for 2024
1. There is no point cap!
2. There is still a 10 point daily bonus for getting 10 points in one day.
3. There is a consistency multiplier!

The consistency multiplier:
This simple little number will start at 1 for everybody at the beginning of the competition.
Every day you get 10 points, this number will increase by .1 (for the next day)
Every day you do not get 10 points, this number will decrease by .1 (for the next day)
This numbmer will never get smaller than .5 and will never get bigger than 1.5
The points you score each day will be multiplied by this number for that day.

What this does:
This rewards consistency. If you work out 5 days in a row, you will be making %50 percent more points!
If you don't work out 5 days in a row, your excercise will only count for half of what it is worth.
This will prevent certain un-named individuals from not trying for a month and then going swimming
on the last day and racking up 350 points. 
In order for a heroic final push to be successful, the aforementioned un-named individual would have
to consistently exercise before that final push.

If you miss a day... then you don't get severely punished for breaking your streak, you just lose .1
from your multiplier and you can fix it the next day.
If you miss 10 days... you get what you deserve. Now you will need to exercise 10 days in a row to 
get your multiplier back to max.
