from django.urls import path
from main.views import *

urlpatterns = [
    path('ayt/', ayt, name='login'),
    path('reg/', register, name='reg' ),
    path('', acount, name='ac' )
    
]

