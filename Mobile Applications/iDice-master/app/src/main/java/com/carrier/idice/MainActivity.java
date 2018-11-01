package com.carrier.idice;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button dice_val2;
        dice_val2 = (Button) findViewById(R.id.dice_val2);

        Button dice_val3;
        dice_val3 = (Button) findViewById(R.id.dice_val3);

        Button dice_val4;
        dice_val4 = (Button) findViewById(R.id.dice_val4);

        Button dice_val5;
        dice_val5 = (Button) findViewById(R.id.dice_val5);

        Button dice_val6;
        dice_val6 = (Button) findViewById(R.id.dice_val6);

        Button dice_val7;
        dice_val7 = (Button) findViewById(R.id.dice_val7);

        Button dice_val8;
        dice_val8 = (Button) findViewById(R.id.dice_val8);

        Button dice_val9;
        dice_val9 = (Button) findViewById(R.id.dice_val9);

        Button dice_val10;
        dice_val10 = (Button) findViewById(R.id.dice_val10);

        Button dice_val11;
        dice_val11 = (Button) findViewById(R.id.dice_val11);

        Button dice_val12;
        dice_val12 = (Button) findViewById(R.id.dice_val12);

        final ImageView leftDice = (ImageView) findViewById(R.id.image_diceLeft);
        final ImageView rightDice = (ImageView) findViewById(R.id.image_diceRight);

        dice_val2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v2) {
                leftDice.setImageResource(R.drawable.dice1);
                rightDice.setImageResource(R.drawable.dice1);
            }

        });

        dice_val3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v3) {
                leftDice.setImageResource(R.drawable.dice1);
                rightDice.setImageResource(R.drawable.dice2);
            }

        });

        dice_val4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v4) {
                leftDice.setImageResource(R.drawable.dice2);
                rightDice.setImageResource(R.drawable.dice2);

            }

        });

        dice_val5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v5) {
                leftDice.setImageResource(R.drawable.dice2);
                rightDice.setImageResource(R.drawable.dice3);
            }

        });

        dice_val6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v6) {
                leftDice.setImageResource(R.drawable.dice3);
                rightDice.setImageResource(R.drawable.dice3);
            }

        });

        dice_val7.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v7) {
                leftDice.setImageResource(R.drawable.dice4);
                rightDice.setImageResource(R.drawable.dice3);
            }

        });

        dice_val8.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v8) {
                leftDice.setImageResource(R.drawable.dice4);
                rightDice.setImageResource(R.drawable.dice4);
            }

        });

        dice_val9.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v9) {
                leftDice.setImageResource(R.drawable.dice4);
                rightDice.setImageResource(R.drawable.dice5);
            }

        });

        dice_val10.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v10) {
                leftDice.setImageResource(R.drawable.dice5);
                rightDice.setImageResource(R.drawable.dice5);
            }

        });

        dice_val11.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v11) {
                leftDice.setImageResource(R.drawable.dice6);
                rightDice.setImageResource(R.drawable.dice5);
            }

        });

        dice_val12.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v12) {
                leftDice.setImageResource(R.drawable.dice6);
                rightDice.setImageResource(R.drawable.dice6);
            }

        });
    }
}
