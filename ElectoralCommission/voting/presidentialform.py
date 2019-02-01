from django import forms
from .models import Presidential


class presidential(forms.ModelForm):
    YEARS=[x for x in range(1940,2030)]
    fullname = forms.CharField(label="Full name",max_length=100)
    constituency = forms.CharField(label="Constituency",max_length=100)
    date_of_birth = forms.DateField(label="Date of Birth",widget=forms.SelectDateWidget(years=YEARS))
    image=forms.ImageField()
    party=forms.CharField(label="Political Party",max_length=50)
    votes_count = forms.IntegerField(label="Number of votes")

    fullname.widget.attrs.update({'id':'fullname'})
    constituency.widget.attrs.update({'id': 'constituency'})
    party.widget.attrs.update({'id': 'party'})
    date_of_birth.widget.attrs.update({'id': 'date_of_birth'})
    image.widget.attrs.update({'id': 'image'})
    votes_count.widget.attrs.update({'id': 'votes_count'})

    class Meta:
        model=Presidential
        fields = "__all__"
