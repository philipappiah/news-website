

from django import forms
from .models import Parliamentary


class parliamentary(forms.ModelForm):
    YEARS = [x for x in range(1940, 2030)]
    fullname = forms.CharField(label="Full name", max_length=100)
    constituency = forms.CharField(label="Constituency", max_length=100)
    date_of_birth = forms.DateField(label="Date of Birth",widget=forms.SelectDateWidget(years=YEARS))
    party=forms.CharField(label="Political Party",max_length=50)
    image=forms.ImageField()
    votes_count = forms.IntegerField(label="Number of votes")

    fullname.widget.attrs.update({'id': 'fullname'})
    constituency.widget.attrs.update({'id': 'constituency'})
    date_of_birth.widget.attrs.update({'id': 'date_of_birth'})
    party.widget.attrs.update({'id': 'party'})
    image.widget.attrs.update({'id': 'image'})
    votes_count.widget.attrs.update({'id': 'votes_count'})

    class Meta:
        model = Parliamentary
        fields = "__all__"
