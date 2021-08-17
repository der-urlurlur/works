using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace fibonacci
{
    public partial class Form1 : Form
    {
        public static double func(double x)
        {
            //return Math.Pow(x, 4) - 14 * Math.Pow(x, 3) + 60 * Math.Pow(x, 2) - 70 * x;
            return 2*Math.Pow(x,2)-Math.Exp(x);

        }
        public static double fib(double n)
        {
            if (n > 1)
                return fib(n - 1) + fib(n - 2);
            else
                return n;
        }
        double x1,x2, eps, a, b, n;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            n = double.Parse(textBox1.Text);
            a = double.Parse(textBox3.Text);
            b = double.Parse(textBox4.Text);
            x1 = a + (b - a) * fib(n - 2) / fib(n);
            x2 = a + (b - a) * fib(n - 1) / fib(n);
            //y1 = func(x1);
            //y2 = func(x2);
            while (n>1)
            {
                richTextBox1.Text = richTextBox1.Text + "n = " + n + " x1 = " + x1 + " x2 = " + x2 + "\n";
                if (func(x1) > func(x2))
                {
                    a = x1;
                    x1 = x2;
                    x2 = b - x1 + a;
                }
                else
                {
                    b = x2;
                    x2 = x1;
                    x1 = a + b - x2; 
                }
                n--;
            }
            textBox5.Text = Convert.ToString(func(x1));
            textBox6.Text = Convert.ToString(x1);
            textBox7.Text = Convert.ToString(x2);


        }
    }
}
